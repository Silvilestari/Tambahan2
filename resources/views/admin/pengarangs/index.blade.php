@extends('layouts.admin', ['title' => 'Data Pengarang'])

@section('contents')
<center>
<div class="col-md-7">
    <div class="card">
        <div class="card-header">Daftar Data Pengarang</div>
        <div class="card-body">
            <a href="{{ route('pengarang.create') }}" class="btn btn-sm btn-primary float-left">Tambah Data Pengarang</a>
            <div class="form-group">
                <table class="table table-stripped table-inverse table-responsive">
                    <thead class="thead-invers">
                        <tr>
                            <th>No</th>
                            <th>Nama Pengarang</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengarangs as $index => $pengarang )
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $pengarang->nama_pengarang }}</td>
                                <td>{{ $pengarang->email }}</td>
                                <td>{{ $pengarang->tlp }}</td>
                                <td>
                                    <form action="{{ route('pengarang.destroy', $pengarang->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('pengarang.show', $pengarang->id) }}" class="btn btn-info">Show</a>
                                        <a href="{{ route('pengarang.edit', $pengarang->id) }}" class="btn btn-warning text-light">Edit</a>
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>

                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                </table>

            </div>
        </div>
    </div>
        </div>
    </div>

    </div>
</center>
@endsection
