@extends('layouts/main')

@section('tambah_barangm')
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
                <form action="/masuk/store" method="post">
                    {{ csrf_field() }}
                    <div class="card-header">
                        <h4>Tambah Barang</h4>
                    </div>


                    <div class="card-body">
                        <div class="form-group">
                            <label>Tgl Masuk Barang</label>
                            <input type="date" class="form-control" name="tgl_masuk" placeholder="tgl_masuk Barang . .">
                            @if ($errors->has('tgl_masuk'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_masuk') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="supplaier" class="form-label">Supplaier</label>
                            <select class="form-control "name="supplaier_id">
                                @foreach ($suppaiers as $supplaier)
                                    @if (old('supplaier_id') == $supplaier->id)
                                        <option value="{{ $supplaier->id }}" selected>{{ $supplaier->name }}</option>
                                    @else
                                        <option value="{{ $supplaier->id }}">{{ $supplaier->name }}</option>
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
