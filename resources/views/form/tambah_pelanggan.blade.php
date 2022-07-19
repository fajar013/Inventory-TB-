@extends('layouts/main')

@section('tambah_supplaier')
    <section class="section">
        <div class="section-header">
            <h1>Pelanggan</h1>
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
                <form action="/pelanggan/store" method="post">
                    {{ csrf_field() }}
                    <div class="card-header">
                        <h4>Tambah Pelanggan</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Pelanggan</label>
                            <input type="text" class="form-control" name="name" placeholder="Nama Pelanggan ..">
                            @if ($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>No Telp</label>
                            <input type="text" class="form-control" name="no_hp" placeholder="No. Telp Pelanggan ..">
                            @if ($errors->has('no_hp'))
                                <div class="text-danger">
                                    {{ $errors->first('no_hp') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat Pelanggan..">
                            @if ($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat') }}
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
