@extends('layouts/main')

@section('supplaier')
    <section class="section">
        <div class="section-header">
            <h1>Supplaier</h1>
        </div>


        <div class="card-body">
            <a href="/screate" class="btn btn-primary">Tambah Supplaier</a>
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success col-12 col-md-6 col-lg-6">
                {{ session['success'] }}
            </div>
        @endif

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Stok Supplaier</h4>
                    </div>



                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Telp</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($suppaiers as $S)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $S->name }}</td>
                                        <td>{{ $S->no_hp }}</td>
                                        <td>{{ $S->alamat }}</td>
                                        <td>
                                            <a href="/edits/{{ $S->id }}" class="btn btn-warning">Edit</a>
                                            <a href="hapus/{{ $S->id }}"
                                                onclick="return confirm('Yakin Hapus data?')"
                                                class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
