<?php

namespace App\Controllers;

class Produk extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('pages/produk');
        echo view('layout/footer');
    }
}
