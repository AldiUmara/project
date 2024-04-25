<?php

namespace App\Models;

use CodeIgniter\Model;

class Contoh2 extends Model
{
    #Membuat variabel untuk menampung nilai
    public $nilai1, $nilai2, $hasil;
    #method penjumlahan
    public function jumlah($n1= null, $n2 = null)
    {
    $this->nilai1 = intval($n1);
    $this->nilai2 = intval($n2);
    $this->hasil = $this->nilai1 + $this->nilai2;
    return $this->hasil;
    }
}