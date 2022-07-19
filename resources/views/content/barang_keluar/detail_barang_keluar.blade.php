@extends('layouts/main')

@section('dkeluar')
    <section class="section">
        <div class="section-header">
            <h1>Daftar Barang Keluar</h1>
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

                    <div class="col-6">

                        <h6>Tanggal Keluar : {{ $barang_keluars->tgl_keluar }}</h6>
                        <h6>Nama Pelanggan : {{ $pelanggans->name }}</h6>
                        <h6>No. Telp : {{ $pelanggans->no_hp }}</h6>
                        <h6>Alamat : {{ $pelanggans->alamat }}</h6>


                    </div>



                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    {{-- <th scope="col">#</th> --}}
                                    <th scope="col">Kode Barang</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Harga Barang</th>

                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    {{-- <td>{{ $loop->iteration }}</td> --}}
                                    <td>{{ $barangs->kode }}</td>
                                    <td>{{ $barangs->nama }}</td>
                                    <td>{{ $barangs->harga }}</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                    <div class="card-body">
                        <a href="/printbk" class="btn btn-success" target="_blank">Print</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
