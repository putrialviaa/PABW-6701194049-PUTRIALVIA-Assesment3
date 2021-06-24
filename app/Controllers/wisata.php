<?php

namespace App\Controllers;

use App\Models\WisataModel;

class Wisata extends BaseController
{
    protected $wisataModel;
    public function __construct()
    {
        $this->wisataModel = new WisataModel();
    }

    public function index()
    {

        $data['wisata'] = $this->wisataModel->getWisata();
        echo view('wisata/index', $data);
    }

    public function detailWisata($id_wisata)
    {

        $data = [
            'title' => 'Detail Pariwisata',
            'subTitle' => 'Pariwisata',
            'wisata' => $this->wisataModel->getWisata($id_wisata)
        ];
        return view('wisata/detailWisata', $data);
    }

    public function create()
    {

        $data = [
            'title' => 'Form Tambah Wisata',
            'subTitle' => 'Wisata'
        ];

        return view('wisata/create', $data);
    }

    public function save()
    {

        // ambil gambar

        $fileGambarWisata = $this->request->getFile('gambar_wisata');

        // pindahkan ke folder img

        $fileGambarWisata->move('img');

        // ambil nama file gambar artikel

        $namaFileGambarWisata = $fileGambarWisata->getName();


        $this->wisataModel->save([

            'nama_wisata' => $this->request->getVar('nama_wisata'),
            'lokasi_wisata' => $this->request->getVar('lokasi_wisata'),
            'deskripsi_wisata' => $this->request->getVar('deskripsi_wisata'),
            'gambar_wisata' => $namaFileGambarWisata
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/wisata');
    }

    public function delete($id_wisata)
    {

        $this->wisataModel->delete($id_wisata);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');

        return redirect()->to('/wisata');
    }

    public function edit($id_wisata)
    {

        $data = [
            'title' => 'Form Ubah Pariwisata',
            'subTitle' => 'Pariwisata',
            'wisata' => $this->wisataModel->getWisata($id_wisata)
        ];

        return view('wisata/edit', $data);
    }


    public function update($id_wisata)
    {

        $fileGambarWisata = $this->request->getFile('gambar_wisata');

        // cek gambar, apakah tetap gambar lama

        if ($fileGambarWisata->getError() == 4) {
            $namaGambarWisata = $this->request->getVar('gambarWisataLama');
        } else {

            // generate nama file random

            $namaGambarWisata = $fileGambarWisata->getRandomName();

            // pindahkan gambar 

            $fileGambarWisata->move('img', $namaGambarWisata);
        }


        $this->wisataModel->save([
            'id_wisata' => $id_wisata,
            'nama_wisata' => $this->request->getVar('nama_wisata'),
            'lokasi_wisata' => $this->request->getVar('lokasi_wisata'),
            'deskripsi_wisata' => $this->request->getVar('deskripsi_wisata'),
            'gambar_wisata' => $namaGambarWisata
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/wisata');
    }
}
