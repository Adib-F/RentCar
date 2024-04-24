<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class list_product114 extends Controller
{
    public function getData()
    {
    $dataBarang = [ 
            ['id' => 1, 'produk' => 'Mio Z'],
            ['id' => 2, 'produk' => 'Nmax'],
            ['id' => 3, 'produk' => 'Satria Fu'],
            ['id' => 4, 'produk' => 'Beat Street '],
            ['id' => 5, 'produk' => 'Aerox'],
        ];
        return $dataBarang;
    }

    public function listproduct114(){
        $data = $this->getData();
        return view ('list_product114', compact ('data'));
    }
}
