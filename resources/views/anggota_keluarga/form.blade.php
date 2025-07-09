@php
    $opsi_hubungan = ['Suami', 'Istri', 'Anak', 'Orang Tua', 'Mertua', 'Cucu', 'Saudara', 'Lainnya'];
@endphp
<div class="form-group">
    <label>No Kartu Keluarga</label>
    <select name="id_keluarga" class="form-control" required>
        <option value="">Pilih KK</option>
        @foreach($keluarga as $k)
            <option value="{{ $k->id }}" {{ (old('id_keluarga', $anggotaKeluarga->id_keluarga ?? '') == $k->id) ? 'selected' : '' }}>
                {{ $k->no_kk }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label>Nama Penduduk</label>
    <select name="id_penduduk" class="form-control" required>
        <option value="">Pilih Penduduk</option>
        @foreach($penduduk as $p)
            <option value="{{ $p->id }}" {{ (old('id_penduduk', $anggotaKeluarga->id_penduduk ?? '') == $p->id) ? 'selected' : '' }}>
                {{ $p->nama }} ({{ $p->nik }})
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label>Hubungan dalam Keluarga</label>
    <select name="hubungan_dalam_keluarga" class="form-control">
        <option value="">-- Pilih Hubungan --</option>
        @foreach ($opsi_hubungan as $hub)
            <option value="{{ $hub }}"
                {{ old('hubungan_dalam_keluarga', $anggotaKeluarga->hubungan_dalam_keluarga ?? '') == $hub ? 'selected' : '' }}>
                {{ $hub }}
            </option>
        @endforeach
    </select>
</div>

