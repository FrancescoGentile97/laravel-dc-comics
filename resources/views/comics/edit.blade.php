@extends('layouts.app')

@section('content')

<div class="container">
    <div class="text-center">
        <h1>Modifica Fumetto #{{$comic->id}}</h1>
    </div>
    {{-- inserire il form con metodo post il "csrf" e il @method("put")
    nella route passare il comics.update e il valore del singolo fumetto tramite id (da testare)
     --}}
     <form action="" method="post">
     @csrf
     @method(`put`)

     <label class="form-label">Titolo:</label>
    <input type="text" name="title" class="form-cotrol">

    <label class="form-label">Descrizione:</label>
    <input type="text" name="description" class="form-cotrol">

    <label class="form-label">Serie:</label>
    <input type="text" name="series" class="form-cotrol">

    <label class="form-label">Prezzo:</label>
    <input type="number" name="price" class="form-cotrol">

    <label class="form-label">Venduto:</label>
    <input type="date" name="sale_date" class="form-cotrol">

    <div>
        <button type="submit" class="btn btn-success">Modifica</button>
    </div>
</form>
    <div class="text-center">
        <a href="{{route("home")}}"><button class="btn btn-primary">Home</button></a>
    </div>
</div>

    
@endsection