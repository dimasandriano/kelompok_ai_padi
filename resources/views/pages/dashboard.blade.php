@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{ route('search') }}" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Semua Varietas" name="varietas" id="input1">
                        <input type="number" class="form-control" placeholder="Hasil Panen" name="panen" id="input2">
                        <input type="text" class="form-control" placeholder="Umur Padi (lebih)" name="umur" id="input3">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </div>
                </form>
                <div class="row">
                    @foreach ($datas as $data)
                        <div class="col-md-4">
                            <div class="card my-2">
                                <img src="{{ $data->img }}" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <div>
                                        <h5 class="card-title">{{ $data->varietas }}</h5>
                                        <p class="card-text">
                                            Varietas yang bernama {{$data->varietas}} biasanya hasil panennya {{$data->hasil_sebelum}} ton. Umur varietas ini biasanya panen pada umur {{$data->umur}} hari. 
                                        </p>
                                    </div>
                                    <a href="/show/{{$data->id}}" class="block w-50 btn btn-primary">Lihat Lengkap</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection