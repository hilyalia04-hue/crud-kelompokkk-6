<h1>Edit Pelanggan</h1>

<form action="{{ route('pelanggans.update', $pelanggan->id) }}" method="POST">
    @csrf
    @method('PUT')

    <p><label for="kode_pelanggan">Kode Pelanggan:</label>
    <input type="text" name="kode_pelanggan" id="kode_pelanggan" value="{{ $pelanggan->kode_pelanggan }}" required>
    </p>

    <p>
    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" value="{{ $pelanggan->nama }}" required>
    </p>

    <p>
    <label for="kategori">Kategori:</label>
    <select name="kategori" id="kategori" required>
        <option value="Reguler" {{ $pelanggan->kategori === 'Reguler' ? 'selected' : '' }}>Reguler</option>
        <option value="Premium" {{ $pelanggan->kategori === 'Premium' ? 'selected' : '' }}>Premium</option>
        <option value="VIP" {{ $pelanggan->kategori === 'VIP' ? 'selected' : '' }}>VIP</option>
    </select>
    </p>

    <p>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="{{ $pelanggan->email }}" required>
    </p>

    <p> <label for="tanggal_daftar">Tanggal Daftar:</label>
    <input type="date" name="tanggal_daftar" id="tanggal_daftar" value="{{ $pelanggan->tanggal_daftar }}" required>
    </p>


    <p>
    <label for="alamat">Alamat:</label>
    <textarea name="alamat" id="alamat" required>{{ $pelanggan->alamat }}</textarea>
    </p>

    <p>
    <label for="keterangan">Keterangan:</label>
    <textarea name="keterangan" id="keterangan">{{ $pelanggan->keterangan }}</textarea>
    </p>

    <button type="submit">Simpan Perubahan</button>
    <button><a href="{{ route('pelanggans.index') }}">Kembali</a></button>
</form>
