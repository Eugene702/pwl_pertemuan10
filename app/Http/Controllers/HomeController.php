<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = Mahasiswa::all();
        return view("home.index", [
            'data' => $data
        ]);
    }

    public function store(Request $req){
        Mahasiswa::create([
            "nim" => $req->nim,
            "nama" => $req->nama,
            "jurusan" => $req->jurusan
        ]);

        return redirect("/");
    }
}