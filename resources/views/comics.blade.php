{{-- prendo il mio layout main dalla cartella, layout che si ripete dovunque --}}
@extends('layouts.main')

{{-- il main-content è quello che invece cambierà e quindi gli inietto il contenuto sotto --}}
@section('main-content')
<div class="container">

    <div class="cards">
    @foreach($cards as $comic )
    <div>
        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
        <h3>{{$comic['series']}}</h3>
    </div>
    @endforeach
    </div>
  
</div>
 
{{-- fine-sezione --}}
@endsection