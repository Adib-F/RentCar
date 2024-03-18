<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController095 extends Controller
{
    public function getData(){
        $dataProduk = [
            ['id' => 1, 'produk' => 'Iphone'],
            ['id' => 1, 'produk' => 'Samsung'],
            ['id' => 1, 'produk' => 'Nokia'],
            ['id' => 1, 'produk' => 'Xiaomi'],
        ];
        return $dataProduk;
    }

    public function tampilkan(){
        $data = $this->getData();
        return view('list_product095', compact('data'));
    }
}
