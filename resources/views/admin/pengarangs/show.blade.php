@extends('layouts.admin')
@section('contents')
<div class="d-flex justify-content-center">
      <div class="col-lg-8">
        <div class="card-header text-center">Data Pengarang</div>
            <div class="card-body">
                <label for="nama_pengarang">
                    Nama Pengarang :
                </label>
                {{ $pengarang->nama_pengarang }}
                <br>

                <label for="email">
                    Email Pengarang :
                </label>
                {{ $pengarang->email }}
                <br>

                <label for="tlp">
                    Nomor Telepon Pengarang :
                </label>
                {{ $pengarang->tlp }}
                <br>
            </div>

    </div>
</div>

@endsection
