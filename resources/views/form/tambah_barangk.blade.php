@extends('layouts/main')

@section('tambah_barangk')
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
                <form action="/keluar/store" method="post">
                    {{ csrf_field() }}
                    <div class="card-header">
                        <h4>Tambah Barang Keluar</h4>
                    </div>


                    <div class="card-body">
                        <div class="form-group">
                            <label>Tgl keluar Barang</label>
                            <input type="date" class="form-control" name="tgl_keluar" placeholder="tgl_keluar Barang . .">
                            @if ($errors->has('tgl_keluar'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_keluar') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="pelanggan" class="form-label">pelanggan</label>
                            <select class="form-control "name="pelanggan_id">
                                @foreach ($pelanggans as $pelanggan)
                                    @if (old('pelanggan_id') == $pelanggan->id)
                                        <option value="{{ $pelanggan->id }}" selected>{{ $pelanggan->name }}</option>
                                    @else
                                        <option value="{{ $pelanggan->id }}">{{ $pelanggan->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Pilih Barang</label>
                        <div class="selectgroup selectgroup-pills">
                            @foreach ($barangs as $barang )
                                <label class="selectgroup-item">
                                <input type="checkbox" name="barang_id" value="{{ $barang->id }}" class="selectgroup-input" >
                                <span class="selectgroup-button">{{ $barang->nama }}</span>
                                </label>

                            @endforeach

                        </div>
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
