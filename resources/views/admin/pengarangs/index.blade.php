@extends('layouts.admin', ['title' => 'Data Pengarang'])

@section('contents')
    <div class="d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Kumpulan Data pengarang</div>
                    <table class="table table-stripped table-inverse table-responsive">
                        <thead class="thead-invers">
                            <tr>
                                <th>No</th>
                                <th>Nama Pengarang</th>
                                <th>Email</th>
                                <th>No Telepon</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($pengarangs as $index => $pengarang )
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $pengarang->nama_pengarang }}</td>
                                    <td>{{ $pengarang->email }}</td>
                                    <td>{{ $pengarang->telp }}</td>
                                    <td>
                                        <form action="{{ route('pengarang.destroy', $pengarang->id) }}" method="post">
                                        @csrf
                                        <a href="{{ route('pengarang.show', $pengarang->id) }}" class="btn btn-success">Show</a>
                                        <a href="{{ route('pengarang.edit', $pengarang->id) }}" class="btn btn-primary">Edit</a>
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
@endsection
