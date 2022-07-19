@extends('layouts/main')

@section('dmasuk')
    <section class="section">
        <div class="section-header">
            <h1>Daftar Barang Masuk</h1>
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
                        <h4>Barang Masuk</h4>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Pelanggan</th>
                                    <th scope="col">Kode Barang</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Harga Barang</th>
                                    <th scope="col">Kategori Barang</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($barangs as $p)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $p->supplaier->name }}</td>
                                        <td>{{ $p->barang->kode }}</td>
                                        <td>{{ $p->barang->harga }}</td>
                                        <td>{{ $p->category->name }}</td>
                                    </tr>
                                @endforeach --}}

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
