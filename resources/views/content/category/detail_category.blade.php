@extends('layouts/main')

@section('dcategory')
    <section class="section">
        <div class="section-header">
            <h1>Kategori</h1>
        </div>


        {{-- <div class="card-body">
            <a href="/detailc" class="btn btn-primary">Tambah Barang</a>
        </div> --}}

        @if (session()->has('success'))
            <div class="alert alert-success col-12 col-md-6 col-lg-6">
                {{ session['success'] }}
            </div>
        @endif

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar Barang di {{ $category->name }}</h4>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Kode Barang</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Harga Per@</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barangs as $b)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $b->kode }}</td>
                                        <td>{{ $b->nama }}</td>
                                        <td>{{ $b->stok }}</td>
                                        <td>{{ $b->harga }}</td>
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
