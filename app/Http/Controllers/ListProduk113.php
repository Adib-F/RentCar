<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListProduk113 extends Controller
{
    public function getProduct(){
        $dataProduct = [
            ['id' => 1, 'product' => 'Beras Pandan Wangi', 'harga' => 15000],
            ['id' => 2, 'product' => 'Tepung Terigu', 'harga' => 20000],
            ['id' => 3, 'product' => 'Baygon Cair', 'harga' => 13500],
            ['id' => 4, 'product' => 'Penyedap Royco', 'harga' => 3200],
            ['id' => 5, 'product' => 'Minyak Goreng', 'harga' => 14000],
        ];
        return $dataProduct;
    }

    public function luncurkan(){
        $product = $this->getProduct();
        return view('list_product113', compact('product'));
    }
}