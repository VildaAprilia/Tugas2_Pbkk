<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function siswa()
    {
        $nama = 'Vilda Aprilia';
        $umur = '20 Tahun';

        return view('siswa', compact('nama', 'umur'));
    }
}
