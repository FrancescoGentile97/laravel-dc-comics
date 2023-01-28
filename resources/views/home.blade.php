@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Laravel Dc Comics</h1>
        <a href="{{route("comics.index")}}"><button class="btn btn-primary">Lista Fumetti</button></a>
        <a href="{{route("comics.create")}}"><button class="btn btn-success">Aggiungi un fumetto</button></a>
    </div>

@endsection