{{-- prendo il mio layout main dalla cartella, layout che si ripete dovunque --}}
@extends('layouts.main')

{{-- il main-content è quello che invece cambierà e quindi gli inietto il contenuto sotto --}}
@section('main-content')
<h1>Hello</h1>
 
{{-- fine-sezione --}}
@endsection