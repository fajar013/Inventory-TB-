@extends('layouts/main')

@section('keluar')
    <section class="section">
        <div class="section-header">
            <h1>Daftar Barang Keluar</h1>
        </div>

        <div class="card-body">
            <a href="/kcreate" class="btn btn-primary">Tambah Barang</a>
        </div>

        <div class="card-body">
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
                        <h4>Barang Keluar</h4>
                    </div>



                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tanggal Keluar</th>
                                    <th scope="col">Pelanggan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barang_keluars as $p)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $p->tgl_keluar }}</td>
                                        <td>{{ $p->pelanggan->name }}</td>
                                        <td>
                                            <a href="/detailk/{{ $p->pelanggan->id }}" class="btn btn-success">preview</a>
                                            <a href="/editk/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                            <a href="hapusk/{{ $p->id }}"
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
