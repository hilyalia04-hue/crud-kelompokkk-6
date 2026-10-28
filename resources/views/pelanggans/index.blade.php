<h1>Daftar Pelanggan</h1>
<p>
    <a href="{{ route('pelanggans.create') }}" class="btn btn-primary">Tambah Pelanggan</a>
</p>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>Kode Pelanggan</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Email</th>
            <th>Tanggal Daftar</th>
            <th>Alamat</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
       @forelse ($pelanggans as $pelanggan)
        <tr>
            <td>{{ $pelanggan->kode_pelanggan }}</td>
            <td>{{ $pelanggan->nama }}</td>
            <td>{{ $pelanggan->kategori }}</td>
            <td>{{ $pelanggan->email }}</td>
            <td>{{ $pelanggan->tanggal_daftar }}</td>
            <td>{{ $pelanggan->alamat }}</td>
            <td>{{ $pelanggan->keterangan }}</td>
        </tr>
        @empty
        <tr>
             <td colspan="8">Tidak ada data pelanggan.</td>
        </tr>
        @endforelse
    </tbody>
</table>
