<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListProduct113 extends Controller
{
    public function getProduct(){
        $dataProduct = [
            ['id' => 1, 'nama' => 'Beras Pandan Wangi', 'harga' => 15000],
            ['id' => 2, 'nama' => 'Tepung Terigu', 'harga' => 20000],
            ['id' => 3, 'nama' => 'Baygon Cair', 'harga' => 13500],
            ['id' => 4, 'nama' => 'Penyedap Royco', 'harga' => 3200],
            ['id' => 5, 'nama' => 'Minyak Goreng', 'harga' => 14000],
        ];
        return $dataProduct;
    }

    public function listproduct113(){
        $data = $this->getProduct();
        return view('listproduct113', compact('data'));
    }
}