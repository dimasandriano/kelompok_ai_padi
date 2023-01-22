@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="/" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari....." name="search">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </div>
                </form>
                <div class="d-flex flex-wrap gap-1">
                    @foreach ($datas as $data)
                        <div class="card mx-1 my-2" style="width: 32%;">
                            <img src="https://images.placeholders.dev/?width=600&height=300&text={{ $data->varietas}}" class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div>
                                    <h5 class="card-title">{{$data->varietas}}</h5>
                                    <p class="card-text">
                                        Varietas yang bernama {{$data->varietas}} biasanya hasil panennya {{$data->hasil_sebelum}} ton. Umur varietas ini biasanya panen pada umur {{$data->umur}} hari. 
                                    </p>
                                </div>
                                <a href="/show/{{$data->id}}" class="block w-50 btn btn-primary">Lihat Lengkap</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection