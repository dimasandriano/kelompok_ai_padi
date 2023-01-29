@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ $padi->img}}" alt="...">
            </div>
            <div class="col-md-6">
                <h1>{{ $padi->varietas }}</h1>
                <h5 class="text-center">Detail Data</h5>
                <table class="table">
                    <tr>
                        <th scope="row">Bentuk Gabah</th>
                        <th>:</th>
                        <th>{{ $padi->bentuk_gabah }}</th>
                    </tr>
                    <tr>
                        <th scope="col">Bentuk Tanaman</th>
                        <th>:</th>
                        <th>{{ $padi->bentuk_tanaman }}</th>
                    </tr>
                    <tr>
                        <th scope="col">Berat</th>
                        <th>:</th>
                        <th>{{ $padi->berat }} gram</th>
                    </tr>
                    <tr>
                        <th scope="col">Daun</th>
                        <th>:</th>
                        <th>{{ $padi->daun_bendera }}</th>
                    </tr>
                    <tr>
                        <th scope="col">Tekstur Nasi</th>
                        <th>:</th>
                        <th>{{ $padi->tekstur_nasi }}</th>
                    </tr>
                    <tr>
                        <th scope="col">Umur</th>
                        <th>:</th>
                        <th>{{ $padi->umur }} hari</th>
                    </tr>
                    <tr>
                        <th scope="col">Hama</th>
                        <th>:</th>
                        <th>{{ $padi->hama }}</th>
                    </tr>
                    <tr>
                        <th scope="col">Pencegahan</th>
                        <th>:</th>
                        <th>{{ $padi->pencegahan }}</th>
                    </tr>
                    <tr>
                        <th scope="col">Hasil</th>
                        <th>:</th>
                        <th>{{ $padi->hasil_sebelum }} ton</th>
                    </tr>
                    <tr>
                        <th scope="col">Dampak</th>
                        <th>:</th>
                        <th>{{ $padi->hasil_terkena }}</th>
                    </tr>
                    <tr>
                    </tr>
                </table>
                <a href="/" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
@endsection