<?php

namespace App\Controllers;

class Thrift extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('pages/beranda');
        echo view('layout/footer');
    }
}
