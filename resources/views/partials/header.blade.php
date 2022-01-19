<header class="main-header container">
    <a class="logo" href="{{route('home')}}">
        <img src="{{asset('images/dc-logo.png')}}" alt="DC LOGO"></a>
    <ul>
        {{-- from web.php name() --}}
        <li @if(Request::route()->getName === 'comics') class='active' @endif>
            <a href="{{route('comics')}}">
            COMICS</a></li>

        <li @if(Request::route()->getName === 'news') class='active' @endif>
            <a href="{{route('news')}}">
            NEWS</a></li>
    </ul>

    {{-- @dump(Request::route()->getName()) --}}
</header>