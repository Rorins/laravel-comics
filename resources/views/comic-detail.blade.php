@extends('layouts.main')

@section('main-content')

<section class="comic-detail">
    <div>
        <img src="{{asset('images/jumbotron.jpg')}}" alt="DC LOGO">
    </div>
<div class="container">
    <figure>
        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
    </figure>
    <h1>{{$comic['title']}}</h1>
    <h2>U.S Price:{{$comic['price']}}</h2>
    <p>{{$comic['description']}}</p>
    <img src="{{asset('images/adv.jpg')}}" alt="DC LOGO">
</div>
</section>

@endsection