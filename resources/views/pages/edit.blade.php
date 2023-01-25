@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('padi.update', $padi->id ) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="varietas" class="form-label">Varietas</label>
                            <input type="text" class="form-control" id="varietas" name="varietas" placeholder="Nama Varietas">
                            @error('varietas')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="gambar" class="form-label">Link Gambar</label>
                        <input type="text" class="form-control" id="gambar" name="gambar" placeholder="Link Gambar">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="bentuk_gabah" class="form-label">Bentuk Gabah</label>
                            <select class="form-select" id="bentuk_gabah" name="bentuk_gabah">
                                <option value="Medium">Medium</option>
                                <option value="Ramping">Ramping</option>
                                <option value="Gemuk">Gemuk</option>
                                <option value="Panjang Gemuk">Panjang Gemuk</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="bentuk_tanaman" class="form-label">Bentuk Tanaman</label>
                            <select class="form-select" id="bentuk_tanaman" name="bentuk_tanaman">
                                <option value="Tegak">Tegak</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="berat" class="form-label">Berat 1000 butir / gram</label>
                            <input type="number" class="form-control" id="berat" name="berat"  value="{{$padi->berat}}">
                            @error('berat')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="daun_bendera" class="form-label">Bentuk Daun</label>
                            <select class="form-select" id="daun_bendera" name="daun_bendera">
                                <option value="Tegak">Tegak</option>
                                <option value="Terkurai">Terkurai</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="umur" class="form-label">Umur Tanaman / hari</label>
                            <input type="number" class="form-control" id="umur" name="umur" value="{{$padi->umur}}">
                            @error('umur')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="tekstur_nasi" class="form-label">Tekstur Nasi</label>
                            <select class="form-select" id="tekstur_nasi" name="tekstur_nasi">
                                <option value="Sedang">Sedang</option>
                                <option value="Pulen">Pulen</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="hama" class="form-label">Hama</label>
                            <select class="form-select" id="hama" name="hama">
                                <option value="Wereng">Wereng</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="pencegahan" class="form-label">Pencegahan</label>
                            <input type="text" class="form-control" id="pencegahan" name="pencegahan" value="{{$padi->pencegahan}}">
                            @error('pencegahan')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="hasil_sebelum" class="form-label">Hasil Panen Normal / ton</label>
                            <input type="number" class="form-control" id="hasil_sebelum" name="hasil_sebelum" value="{{$padi->hasil_sebelum}}">
                            @error('hasil_sebelum')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="hasil_terkena" class="form-label">Hasil Sesudah Terkena Hama</label>
                            <select class="form-select" id="hasil_terkena" name="hasil_terkena">
                                <option value="Panen">Panen</option>
                                <option value="Gagal Panen">Gagal Panen</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
        </div>
    </div>
</div>
@endsection
