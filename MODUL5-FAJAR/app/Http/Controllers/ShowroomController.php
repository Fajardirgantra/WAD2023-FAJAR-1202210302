<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    public function create(){
    $data = $request->all();
    Showroom::create([
        'id' => $data(),
        'nama_mobil' => $data('nama_mobil'),
        'brand_mobil' => $data('brand_mobil'),
        'warna_mobil' => $data('warna_mobil'),
        'tipe_mobil' => $data('tipe_mobil'),
        'harga_mobil' => $data('harga_mobil'),
        'created_at' => $data(),
        'update_at' => $data(),
    ]);
    $users = user::all();
    return view('user/index', compact('users'));
    }
    public function store(Request $request){
        $data = $request->all();
        Showroom::store([
            'id' => $data(),
            'nama_mobil' => $data('nama_mobil'),
            'brand_mobil' => $data('brand_mobil'),
            'warna_mobil' => $data('warna_mobil'),
            'tipe_mobil' => $data('tipe_mobil'),
            'harga_mobil' => $data('harga_mobil'),
            'created_at' => $data(),
            'update_at' => $data(),
        ]);
        $Showroom = Showroom::all();
        return view('showroom_mobil/index', compact('showroom_mobil'));
        }
        public function index(){   
            $Showroom = Showroom::all();
            return view('Showroom.Showroom', compact('Showroom'));
        }
}
