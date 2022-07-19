@extends('layouts/main')

@section('pelanggan')
    <section class="section">
        <div class="section-header">
            <h1>Pelanggan</h1>
        </div>


        <div class="card-body">
            <a href="/pcreate" class="btn btn-primary">Tambah Pelanggan</a>
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
                        <h4>Daftar Pelanggan</h4>
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
                                @foreach ($pelanggans as $p)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $p->name }}</td>
                                        <td>{{ $p->no_hp }}</td>
                                        <td>{{ $p->alamat }}</td>
                                        <td>
                                            <a href="/editp/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                            <a href="phapus/{{ $p->id }}"
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
