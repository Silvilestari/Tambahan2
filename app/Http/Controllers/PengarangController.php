<?php

namespace App\Http\Controllers;

use App\Models\Pengarang;
use Illuminate\Http\Request;

class PengarangController extends Controller
{
    public function index()
    {
        $pengarangs = Pengarang::get();
        return view('admin.pengarangs.index', compact('pengarangs'));
    }

    public function create()
    {
        return view('admin.pengarangs.create');
    }

    public function store(Request $request)
    {
        Pengarang::create([
            'nama_pengarang' => $request->nama_pengarang,
            'email' => $request->email,
            'no_telp' => $request->no_telp
        ]);

        return redirect('admin/');
    }

    public function show(Pengarang $pengarang)
    {
        return view('admin.pengarangs.show', compact('pengarang'));
    }


    public function edit(Pengarang $pengarang)
    {
        //
    }


    public function update(Request $request, Pengarang $pengarang)
    {
        //
    }


    public function destroy(Pengarang $pengarang)
    {
        //
    }
}
