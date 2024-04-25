<?php

namespace App\Controllers;

class Contoh1 extends BaseController
{
    public function index()
    {
        echo "Selamat Datang.. selamat belajar Web Programming II";
        //$this->load->view('view-biodata1')
    }
    public function penjumlahan ($n1, $n2)
    {
        //Memuat model Contoh2
        $contoh2Model = new \App\Models\Contoh2();

        //Menyiapkan data untuk dikirim ke view
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $contoh2Model->jumlah($n1, $n2);

        #Memuat view contoh3 dengan data yang sudah disiapkan
        return view('contoh3', $data);
    }
}

