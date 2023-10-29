<?php

namespace App\Http\Controllers;

use App\Models\Penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
    public function index()
    {
        $penuliss = Penulis::all();

        return view('penuliss.index', compact('penuliss'));
    }

    public function create()
    {
        return view('penuliss.create');
    }

    public function store(Request $request)
    {
        //1. validasi
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255|unique:penulis,email',
            'address' => 'nullable',
        ]);

        //2. masukan data ke database
        $penulis = new Penulis();

        $penulis->name = $request->name;
        $penulis->email = $request->email;
        $penulis->address = $request->address;

        $penulis->save();

        //3. redirect
        return redirect()
            ->route('penuliss.index')
            ->with('pesan', 'Data berhasil disimpan');
    }

    public function show(Penulis $penulis)
    {
        return view('penuliss.show', compact('penulis'));
    }

    public function edit(Penulis $penulis)
    {
        return view('penuliss.edit', compact('penulis'));
    }

    public function update(Request $request, Penulis $penulis)
    {
        //1. validasi
        $request->validate([
            'name' => 'required|max:255|unique:penulis,name,' . $penulis->id,
            'email' => 'required|email|max:255',
            'address' => 'nullable|max:255',
        ]);

        //2. update
        $penulis->name = $request->name;
        $penulis->email = $request->email;
        $penulis->address = $request->address;

        $penulis->save();

        //3. redirect
        return redirect()
            ->route('penuliss.index')
            ->with('pesan', 'Data berhasil diupdate');
    }

    public function destroy(Penulis $penulis)
    {
        $penulis->delete();

        return redirect()
            ->route('penuliss.index')
            ->with('pesan', 'Data berhasil dihapus');
    }
}
