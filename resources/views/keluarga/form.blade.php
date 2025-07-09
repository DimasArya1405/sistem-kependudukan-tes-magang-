<div class="form-group">
    <label>No KK</label>
    <input type="text" name="no_kk" class="form-control" value="{{ old('no_kk', $keluarga->no_kk ?? '') }}" required>
</div>

<div class="form-group">
    <label>Alamat</label>
    <textarea name="alamat" class="form-control">{{ old('alamat', $keluarga->alamat ?? '') }}</textarea>
</div>

<div class="form-group">
    <label>RT/RW</label>
    <input type="text" name="rt_rw" class="form-control" value="{{ old('rt_rw', $keluarga->rt_rw ?? '') }}">
</div>

<div class="form-group">
    <label>Kelurahan</label>
    <input type="text" name="kelurahan" class="form-control" value="{{ old('kelurahan', $keluarga->kelurahan ?? '') }}">
</div>

<div class="form-group">
    <label>Kecamatan</label>
    <input type="text" name="kecamatan" class="form-control" value="{{ old('kecamatan', $keluarga->kecamatan ?? '') }}">
</div>

<div class="form-group">
    <label>Kepala Keluarga</label>
    <select name="kepala_keluarga_id" class="form-control">
        <option value="">- Pilih Kepala Keluarga -</option>
        @foreach($penduduk as $item)
            <option value="{{ $item->id }}"
                {{ old('kepala_keluarga_id', $keluarga->kepala_keluarga_id ?? '') == $item->id ? 'selected' : '' }}>
                {{ $item->nama }} ({{ $item->nik }})
            </option>
        @endforeach
    </select>
</div>
