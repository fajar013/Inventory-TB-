@extends('layouts/main')

@section('edits')
    <section class="section">
        <div class="section-header">
            <h1>supplaier</h1>
        </div>

        <div>
            <div class="card">
                {{-- menampilkan error validasi --}}

                <form action="/supplaier/update/{{ $suplaiers->id }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="card-header">
                        <h4>Edit supplaier</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Supplaier</label>
                            <input type="text" class="form-control" name="name" placeholder="Nama supplaier .."
                                value="{{ $suplaiers->name }}">
                            @if ($errors->has('name'))
                                <div class="text-danger">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat .."
                                value="{{ $suplaiers->alamat }}">
                            @if ($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>No Telp</label>
                            <input type="text" class="form-control" name="no_hp"
                                placeholder="No_telp Supplaier.."value="{{ $suplaiers->no_hp }}">
                            @if ($errors->has('no_hp'))
                                <div class="text-danger">
                                    {{ $errors->first('no_hp') }}
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
