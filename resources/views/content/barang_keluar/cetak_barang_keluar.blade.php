<div class="row" target="_blank">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Barang Keluar</h4>
            </div>

            <div class="col-6">
                @foreach ($barang_keluars as $p)
                    <h6>Tanggal Keluar : {{ $p->tgl_keluar }}</h6>
                    <h6>Nama Pelanggan : {{ $p->pelanggan->name }}</h6>
                    <h6>No. Telp : {{ $p->pelanggan->no_hp }}</h6>
                    <h6>Alamat : {{ $p->pelanggan->alamat }}</h6>
                @endforeach

            </div>



            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kode Barang</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Harga Barang</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang_keluars as $p)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $p->barang->kode }}</td>
                                <td>{{ $p->barang->nama }}</td>
                                <td>{{ $p->barang->harga }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="card-body">
                <a href="/printbk" class="btn btn-success" target="_blank">Print</a>
            </div>
        </div>
    </div>
</div>
