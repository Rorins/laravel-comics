@extends('layouts.main')

@section('main-content')

<section class="comic-detail">
<div class="container">
    <header></header>
    <figure>
        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
    </figure>
    <h1>{{$comic['title']}}</h1>
    <h2>U.S Price:{{$comic['price']}}</h2>
    <p>{{$comic['description']}}</p>
</div>
</section>

@endsection