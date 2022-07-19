@extends('layouts/main')

@section('masuk')
    <section class="section">
        <div class="section-header">
            <h1>Daftar Barang Masuk</h1>
        </div>


        <div class="card-body">
        </div>

        <div class="card-body">
            <a href="/mcreate" class="btn btn-primary">Tambah Barang</a>
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
                        <h4>Barang Masuk</h4>
                    </div>



                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tanggal Masuk</th>
                                    <th scope="col">Supplaier</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barang_masuks as $m)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $m->tgl_keluar }}</td>
                                        <td>{{ $m->supplaier->name }}</td>
                                        <td>
                                            <a href="/detailm/{{ $m->id }}" class="btn btn-success">View</a>
                                            <a href="/edit/{{ $m->id }}" class="btn btn-warning">Edit</a>
                                            <a href="hapus/{{ $m->id }}"
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
