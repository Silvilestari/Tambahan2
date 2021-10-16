@extends('layouts.admin')
@section('contents')
    <div class="d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-title">Show Data {{ $pengarang->nama_pengarang }}</div>

                <div class="card-body">
                    <label for="nama_pengarang">Nama Pengarang</label>
                </div>
            </div>
        </div>
    </div>
@endsection
