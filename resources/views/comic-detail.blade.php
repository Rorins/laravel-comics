@extends('layouts.main')

@section('main-content')
{{-- JUMBO --}}
<section class="comic-detail">
    <div class="jumbo">
        <img src="{{asset('images/jumbotron.jpg')}}" alt="DC LOGO">
    </div>
{{-- COMIC SECTION --}}
<div class="container">
    <figure>
        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
    </figure>

{{-- TITLES --}}
<div class="comic-main d-flex">
<div class="comic-info"> 
    <h1>{{$comic['title']}}</h1>
<div class="detail-box">
    <span>U.S Price:{{$comic['price']}}</span>
<div>
    <span>AVAILABLE</span>
    <span>Check Availability</span>
</div>
</div>

{{-- DESCRIPTION --}}
    <p>{{$comic['description']}}</p>
</div>

<div class="img-box">
<h3 class="text-right">ADVERTISEMENT</h3>
<img src="{{asset('images/adv.jpg')}}" alt="DC LOGO">
</div>

</div>
</div>
</section>

@endsection