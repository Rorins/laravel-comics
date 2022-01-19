<header class="main-header container">
    <a class="logo" href="{{route('home')}}"><img src="{{asset('images/dc-logo.png')}}" alt="DC LOGO"></a>
    <ul>
        {{-- from web.php name() --}}
        <li><a href="{{route('home')}}">COMICS</a></li>
        <li><a href="{{route('news')}}">NEWS</a></li>
    </ul>
</header>