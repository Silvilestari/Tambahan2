<?php

namespace App\Http\Controllers;

use App\Models\Pengarang;
use Illuminate\Http\Request;

class PengarangController extends Controller
{
    public function index()
    {
        $pengarangs = Pengarang::all();
        return view('admin.pengarangs.index', compact('pengarangs'));
    }

    public function create()
    {
        return view('admin.pengarangs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pengarang' => 'required',
            'email' => 'required|unique:pengarangs,email',
            'tlp' => 'required|unique:pengarangs,tlp',
        ]);

        $pengarang = new Pengarang();
        $pengarang->nama_pengarang = $request->nama_pengarang;
        $pengarang->email = $request->email;
        $pengarang->tlp = $request->tlp;
        $pengarang->save();

        return redirect()->route('pengarang.index');
    }

    public function show($id)
    {
        $pengarang = Pengarang::findOrFail($id);
        return view('admin.pengarangs.show', compact('pengarang'));
    }


    public function edit($id)
    {
        $pengarang = Pengarang::findOrFail($id);
        return view('admin.pengarangs.edit', compact('pengarang'));
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'nama_pengarang' => 'required',
            'email' => 'required|unique:pengarangs,email,' .$id,
            'tlp' => 'required|unique:pengarangs,tlp,'.$id,
        ]);

        $pengarang = Pengarang::findOrFail($id);
        $pengarang->nama_pengarang = $request->nama_pengarang;
        $pengarang->email = $request->email;
        $pengarang->tlp = $request->tlp;
        $pengarang->save();

        return redirect()->route('pengarang.index');
    }


    public function destroy($id)
    {
        Pengarang::findOrFail($id)->delete();
        return redirect()->route('pengarang.index');
    }
}
