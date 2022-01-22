{{-- prendo il mio layout main dalla cartella, layout che si ripete dovunque --}}
@extends('layouts.main')

{{-- il main-content è quello che invece cambierà e quindi gli inietto il contenuto sotto --}}
@section('main-content')
<div class="main-comics">

<div class="container">
    <div class="cards">
        {{-- index diventa il parametro che voglio passare al parametro id 
           da $cards as $comic diventa $cards as $index => $comic   --}}
    @foreach($cards as $index => $comic )

    <div class="card">
        {{-- AGGIUNTA LINK prendiamo product detail da web.php
            il metodo route accetta come al solito il secondo parametro che qua è id che ha come
            valore la posizione dell'array dei comics 
            '/comic/{id}' sarà il nostro percorso--}}
        <a href="{{route('comic-detail', ['id' => $index])}}">
    <div>
        {{-- Le graffe sono come un echo --}}
        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
    </div>
        <h3>{{$comic['series']}}</h3>
    </a>
    </div>
    
    @endforeach
    </div>
</div>

<div class="button-section">
<button><h4>LOAD MORE</h4></button>
</div>

</div>
 
{{-- fine-sezione --}}
@endsection