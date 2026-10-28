<h1>Tambah Pelanggan</h1>

<form action="{{ route}}('pelanggans.store') }}" method="POST">
    @csrf
    <p><label for="kode_pelanggan">Kode Pelanggan:</label>
    <input type="text" name="kode_pelanggan" id="kode_pelanggan" required>
</p>

<p> <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" required>
</p>

<p> <label for="kategori">Kategori:</label>
    <input type="text" name="kategori" id="kategori" required>
</p>

<p> <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
</p>

<p></p> <label for="tanggal_daftar">Tanggal Daftar:</label>
    <input type="date" name="tanggal_daftar" id="tanggal_daftar" required>
</p>

<p> <label for="alamat">Alamat:</label>
    <textarea name="alamat" id="alamat" required></textarea>
</p>

<p><label for="keterangan">Keterangan:</label>
    <textarea name="keterangan" id="keterangan"></textarea>
</p>


    <button type="submit">Simpan</button>

    <a href="{{ route('pelanggans.index') }}">Kembali</a>
</form>
