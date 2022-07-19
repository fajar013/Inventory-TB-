@extends('layouts/main')

@section('editc')
    <section class="section">
        <div class="section-header">
            <h1>Kategori</h1>
        </div>

        <div>
            <div class="card">
                {{-- menampilkan error validasi --}}

                <form action="/category/update/{{ $categories->id }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="card-header">
                        <h4>Edit Barang</h4>
                    </div>
                    <div class="card-body">

                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="name" placeholder="Nama Kategori .."
                                value="{{ $categories->name }}">
                            @if ($errors->has('name'))
                                <div class="text-danger">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
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
