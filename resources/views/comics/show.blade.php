@extends('layouts.app')

{{-- qui verranno visualizzati i dettagli del singolo fumetto cliccato nell'index --}}


@section('content')
    <div class="container">
        <div class="text-center">
            <h1>{{$comic->title}}</h1>
        </div>
        <div class="row">
            <div class="col">
                <img src="" class="img-fluid">
                <div>
                    <h5>Descrizione:</h5>
                    <p>{{$comic->description}}</p>
                </div>
                <div>
                    <h5>Series:</h5>
                    <p>{{$comic->series}}</p>
                </div>
                <div>
                    <h5>Price:</h5>
                    <span>$ {{$comic->price}}</span>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="{{route("comics.index")}}"><button class="btn btn-primary">Home</button></a>
        </div>
    </div>
@endsection