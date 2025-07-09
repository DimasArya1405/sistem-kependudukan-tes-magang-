@php
    $isEdit = isset($penduduk);
@endphp

<div class="form-group">
    <label>NIK</label>
    <input type="text" name="nik" class="form-control" value="{{ old('nik', $isEdit ? $penduduk->nik : '') }}" required>
</div>

<div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" value="{{ old('nama', $isEdit ? $penduduk->nama : '') }}" required>
</div>

<div class="form-group">
    <label>Tempat Lahir</label>
    <input type="text" name="tempat_lahir" class="form-control" value="{{ old('tempat_lahir', $isEdit ? $penduduk->tempat_lahir : '') }}">
</div>

<div class="form-group">
    <label>Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir" class="form-control" value="{{ old('tanggal_lahir', $isEdit ? $penduduk->tanggal_lahir : '') }}">
</div>

<div class="form-group">
    <label>Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control">
        <option value="L" {{ old('jenis_kelamin', $isEdit ? $penduduk->jenis_kelamin : '') == 'L' ? 'selected' : '' }}>Laki-laki</option>
        <option value="P" {{ old('jenis_kelamin', $isEdit ? $penduduk->jenis_kelamin : '') == 'P' ? 'selected' : '' }}>Perempuan</option>
    </select>
</div>

<div class="form-group">
    <label>Pekerjaan</label>
    <select name="pekerjaan_id" class="form-control">
        <option value="">-- Pilih Pekerjaan --</option>
        @foreach($pekerjaan as $p)
            <option value="{{ $p->id }}" {{ old('pekerjaan_id', $isEdit ? $penduduk->pekerjaan_id : '') == $p->id ? 'selected' : '' }}>
                {{ $p->nama }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label>Pendidikan</label>
    <select name="pendidikan_id" class="form-control">
        <option value="">-- Pilih Pendidikan --</option>
        @foreach($pendidikan as $d)
            <option value="{{ $d->id }}" {{ old('pendidikan_id', $isEdit ? $penduduk->pendidikan_id : '') == $d->id ? 'selected' : '' }}>
                {{ $d->nama }}
            </option>
        @endforeach
    </select>
</div>

<!-- Tambahan kolom lain jika ingin -->
