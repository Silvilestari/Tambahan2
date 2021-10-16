<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Pengarang;

class BookController extends Controller
{

    public function index()
    {
        $books =  Book::all();
        $pengarangs = Pengarang::all();
        return view('admin.books.index', compact('books', 'pengarangs'));
        // return view('admin.books.index');
    }

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
    public function create()
    {
        return view('admin.books.create');
    }

    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.books.show', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.books.edit', compact('id'));
    }


    public function destroy($id)
    {
        //
    }
}
