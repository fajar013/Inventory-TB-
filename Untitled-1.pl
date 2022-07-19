Barang::create([
    'category_id'=> 1,
    'kode' => '011',
    'slug' => 'semen-Gersik',
    'nama' => 'Semen Gersik',
    'stok' => '500',
    'harga' => '51.000',
])

Barang::create([
    'category_id'=> 2,
    'kode' => '021',
    'slug' => 'gerindra',
    'nama' => 'Gerindra',
    'stok' => '70',
    'harga' => '187.000',
])

Barang::create([
    'category_id'=> 3,
    'kode' => '031',
    'slug' => 'kaca-pintu',
    'nama' => 'Kaca Pintu',
    'stok' => '70',
    'harga' => '200.000',
])


Category::create([
    'name' => 'Dekorasi',
    'slug'=> 'dekorasi',
])

Pelanggan::create([
    'name' => 'Bagus Aji',
    'telp'=>'085749333108',
    'alamat'=>'Gebang Ngemplak',
    'slug'=> 'bagus-aji',
])


Supplaier::create([
    'name' => 'PT Semen Gersik tbk',
    'telp'=>'(009) 55 66 777',
    'alamat'=>'Gersik Jatim',
    'slug'=> 'semen-gersik-tbk',
])



$barang-> nama = 'Semen Gersik'

$barang-> kode = '001'
$barang-> tgl_masuk = "2022-07-01"
$barang-> stok = '350'
$barang-> harga = '52.000'

<tbody>
                                @foreach ($barang_masuk as $p)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $p->kode }}</td>
                                        <td>{{ $p->nama }}</td>
                                        <td>{{ $p->stok }}</td>
                                        <td>{{ $p->harga }}</td>
                                        <td>
                                            <a href="/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                            <a href="hapus/{{ $p->id }}"
                                                onclick="return confirm('Yakin Hapus data?')"
                                                class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
