@extends('layouts.admin')

@section('contents')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">Edit Pengarang Buku</div>
                <div class="card-body">
                    <form action="{{ route('pengarang.update', $pengarang->id) }}" method="POST" accept="">
                        @csrf
                        @method('PUT')
                        @if ($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                        </div>
                        @endif
                        <div class="form-group">
                        <div class="col-lg-12">
                            Masukan Nama Pengarang
                        </div>

                        <div class="col-lg-12">
                            <input type="text" value="{{$pengarang->nama_pengarang}}" class="form-control" name="nama_pengarang"
                            placeholder="Masukan Nama Pengarang" required>
                        </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12">
                                Masukan Email Pengarang
                            </div>

                            <div class="col-lg-12">
                                <input type="email" value="{{$pengarang->email}}" class="form-control" name="email"
                                placeholder="Masukan Email Pengarang" required>
                            </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    Masukan Nomor Telepon Pengarang
                                </div>

                                <div class="col-lg-12">
                                    <input type="text" value="{{$pengarang->tlp}}" class="form-control" name="tlp"
                                    placeholder="Masukan Nomor Telepon Pengarang" required>
                                </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-danger">Ubah Data</button>
                                    </div>
                                    </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
