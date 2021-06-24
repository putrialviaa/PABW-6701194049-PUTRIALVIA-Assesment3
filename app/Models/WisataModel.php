<?php

namespace App\Models;

use CodeIgniter\Model;

class WisataModel extends Model
{
    protected $table = 'wisata';

    public function getWisata($wisata = false)
    {

        if ($wisata == false) {
            return $this->findAll();
        }

        return $this->where(['id_wisata' => $wisata])->first();
    }
}
