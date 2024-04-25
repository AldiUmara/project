<?php

namespace App\Controllers;

class Biodata extends BaseController
{
    public function index()
    {
        echo "<h1> Perkenalkan</h1>";
        echo "<br> Nama saya Aldi Umara
              <br> Saya tinggal di daerah Kembangan Selatan
              <br> Olah raga yang saya sukai adalah Bulutangkis";
        // return view('welcome_message');
    }
}
