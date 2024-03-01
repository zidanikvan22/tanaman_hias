<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListbarangfController extends Controller
{
    public function getData()
    {
        $dataBarang = [
            ['id' => 1, 'nama' => "Beras Pandan Wangi", 'harga'=> 15000],
            ['id' => 2, 'nama' => "Tepung Terigu", 'harga'=> 32000],
            ['id' => 3, 'nama' => "Baygon Cair", 'harga'=> 35000],
            ['id' => 4, 'nama' => "Penyedap Royco", 'harga'=> 53000],
            ['id' => 5, 'nama' => "Minyak Goreng", 'harga'=> 77000],

        ];

        return $dataBarang;

    }

    public function tampilkan(){
        $data = $this->getData();
        return view('list_barangf', compact('data'));
    }
}
