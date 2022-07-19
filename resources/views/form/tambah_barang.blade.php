@extends('layouts/main')

@section('tambah_barang')
    <section class="section">
        <div class="section-header">
            <h1>Barang</h1>
        </div>

        <div>
            <div class="card">
                {{-- menampilkan error validasi --}}
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/barang/store" method="post">
                    {{ csrf_field() }}
                    <div class="card-header">
                        <h4>Tambah Barang</h4>
                    </div>


                    <div class="card-body">
                        <div class="form-group">
                            <label>Kode Barang</label>
                            <input type="text" class="form-control" name="kode" placeholder="Kode Barang . .">
                            @if ($errors->has('kode'))
                                <div class="text-danger">
                                    {{ $errors->first('kode') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama Barang ..">
                            @if ($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="text" class="form-control" name="stok" placeholder="Jumlah Stok ..">
                            @if ($errors->has('stok'))
                                <div class="text-danger">
                                    {{ $errors->first('stok') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" class="form-control" name="harga" placeholder="Harga Barang per@ ..">
                            @if ($errors->has('harga'))
                                <div class="text-danger">
                                    {{ $errors->first('harga') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="category">Kategori</label>
                            <select class="form-control "name="category_id">
                                @foreach ($categories as $category)
                                    @if (old('category_id') == $category->id)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>


                        </div>
                    </div>
                    <div class="card-footer
                                text-right">
                        <input class="btn btn-primary" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
