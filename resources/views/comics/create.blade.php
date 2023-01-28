@extends("layouts.app")

{{-- qui va inserito il metodo "post" con il (@csrf) per salvare i date ed aggiungere un eventuale fumetto? --}}
{{-- nella action del form rimandare alla rotta dello store --}}

@section('content')
<div class="container">
    <div class="text-center">
        <h1>Aggiungi un Fumetto</h1>
    </div>
    <form action="{{route("comics.store")}}" method="post"></form>
    @csrf
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
    
    <div class="text-center">
        <a href="{{route("home")}}"><button class="btn btn-primary">Home</button></a>
    </div>
</div>
    
@endsection