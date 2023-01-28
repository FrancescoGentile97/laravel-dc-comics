@extends('layouts.app')

{{-- qui all'interno verrebbe visualizzata la lista dei fumetti con un ciclo --}}
{{-- e messo un eventuale bottone per aggiungere un nuovo fumetto? --}}

@section('content')
    <div class="container">
        <div class="text-center">
            <h1>Lista Fumetti:</h1>
            {{-- inserire i due bottoni uno per la home e uno per "l'add" --}}
            <a href=""><button class="btn btn-success"></button></a>
            <a href="{{route("home")}}"><button class="btn btn-primary">Home</button></a>
        </div>
        <div class="row">
            @@foreach ($comics as $comic)
            <div class="col">
                <div class="card">
                    <img src="" class="img-fluid">
                    <div class="card-body">
                        <h4 class="card-title">{{$comic->title}}</h4>
                        <h5 class="card-subtitle">{{$comic->series}}</h5>
                        <span>$ {{$comic->price}}</span>
                    </div>
                </div>
            </div>
            {{-- aggiungere i bottoni per l'edit ecc con le rispettive rotte
            e il form con method:post e il @method delete con il js per chiedere la conferma
             --}}
        </div>
        @endforeach     
    </div>
@endsection