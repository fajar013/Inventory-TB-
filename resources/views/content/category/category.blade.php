@extends('layouts/main')

@section('category')
    <section class="section">
        <div class="section-header">
            <h1>Kategori</h1>
        </div>


        <div class="card-body">
            <a href="/ccreate" class="btn btn-primary">Tambah Kategori</a>
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
                        <h4>Daftar Kategori</h4>
                    </div>



                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $c)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $c->name }}</td>

                                        <td><a href="/detailc/{{ $c->id }}" class="btn btn-primary">Review</a>
                                            <a href="/editc/{{ $c->id }}" class="btn btn-warning">Edit</a>
                                            <a href="hapus/{{ $c->id }}"
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
