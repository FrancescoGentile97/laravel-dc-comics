@extends("layouts.app")

{{-- qui va inserito il metodo "post" con il (@csrf) per salvare i date ed aggiungere un eventuale fumetto? --}}
{{-- nella action del form rimandare alla rotta dello store --}}

@section('content')
<div class="container">
    <div class="text-center">
        <h1>Aggiungi un Fumetto</h1>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        Dati non corretti:
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route("comics.store")}}" method="post"></form>
    @csrf
    <label class="form-label">Titolo:</label>
    <input class="form-control @error(`title`) is-invalid @elseif(old(`title`)) is-valid @enderror"
    type="text" name="title" value="{{$errors->has(`title`) ? `` : old(`title`)}}">

    {{-- creare l'error per il "title" (se c'è) altrimenti mettere il "verde" --}}
    @error(`title`)
    <div class="invalid-feedback">
        {{$message}}
    </div>
    @elseif(old(`title`))
    <div class="valid-feedback">
        Dati corretti!
    </div>
    @enderror

    <label class="form-label">Descrizione:</label>
    <textarea name="description" cols="30" rows="10"
     class="from-control @error(`description`) is-invalid @enderror">{{`description`}}</textarea>
     @error('description')
        <div class="invalid-feedback">
            {{$message}}
        </div>
     @enderror

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