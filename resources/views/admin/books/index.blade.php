@extends('layouts.admin')

@section('contents')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Buku</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($books as $book)
                        Nama Pengarang Buku : {{ $book->pengarang->nama_pengarang }} <br>
                        Email Pengarang BUku : {{ $book->pengarang->email }} <br>
                        Nama Buku : {{ $book->nama_buku }} <br>
                        Jumlah Halaman : {{ $book->jumlah_halaman }} <br>
                        Translate Judul Buku : {{ $book->translate_judul_buku ?? 'Belum ada Translate' }} <hr>
                    @endforeach

                </div>
                <div class="card-footer">
                  Footer
                </div>
            </div>

            <div class="card">
                <div class="card-header">Daftar Pengarang</div>
                <div class="card-body">
                    @foreach ($pengarangs as $pengarang )
                    Nama Pengarang Buku : {{ $pengarang->nama_pengarang }} <br>
                    Email Pengarang Buku : {{ $pengarang->email }} <br>
                    Telepon Pengarang : {{ $pengarang->telp }} <br>
                    Daftar Buku : <br>
                    @foreach ($pengarang->book as $item)
                    Nama BUku : {{ $item->nama_buku }} <br>
                    @endforeach
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
