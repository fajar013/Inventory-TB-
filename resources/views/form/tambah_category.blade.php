@extends('layouts/main')

@section('tambah_kategori')
    <section class="section">
        <div class="section-header">
            <h1>Kategori</h1>
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
                <form action="/category/store" method="post">
                    {{ csrf_field() }}
                    <div class="card-header">
                        <h4>Tambah Kategori</h4>
                    </div>


                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Kategori</label>
                            <input type="text" class="form-control" name="name" placeholder="Nama Kategori ..">
                            @if ($errors->has('name'))
                                <div class="text-danger">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
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
