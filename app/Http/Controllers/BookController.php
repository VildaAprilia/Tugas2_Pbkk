<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function buku()
    {
        $nama_buku = 'Laskar Pelangi';
        $tahun = '2005';

        return view('book', compact('nama_buku', 'tahun'));
    }
}
