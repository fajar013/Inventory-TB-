@extends('layouts/main')

@section('edit')
    <section class="section">
        <div class="section-header">
            <h1>Barang</h1>
        </div>

        <div>
            <div class="card">
                {{-- menampilkan error validasi --}}

                <form action="/barang/update/{{ $barangs->id }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="card-header">
                        <h4>Edit Barang</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Kode Barang</label>
                            <input type="text" class="form-control" name="kode" placeholder="Kode Barang . ."
                                value=" {{ $barangs->kode }}">
                            @if ($errors->has('kode'))
                                <div class="text-danger">
                                    {{ $errors->first('kode') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama Barang .."
                                value="{{ $barangs->nama }}">
                            @if ($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="text" class="form-control" name="stok" placeholder="Jumlah Stok .."
                                value="{{ $barangs->stok }}">
                            @if ($errors->has('stok'))
                                <div class="text-danger">
                                    {{ $errors->first('stok') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" class="form-control" name="harga"
                                placeholder="Harga Barang per@ .."value="{{ $barangs->harga }}">
                            @if ($errors->has('harga'))
                                <div class="text-danger">
                                    {{ $errors->first('harga') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="category" class="form-label">Kategori</label>
                            <select class="form-control "name="category_id" value="{{ $barangs->category_id }}">
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
                        <input class="btn btn-primary" type="submit" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
