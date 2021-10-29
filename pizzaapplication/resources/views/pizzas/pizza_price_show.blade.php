@extends('layouts.app')
@section('content')
    <div class="wrapper pizza-details">
        <h1 class=""> Pizza Name: </h1><h3 class="alert-info">{{ $pizza->name }}</h3><br />
        <h1 class=""> Pizza Price: </h1><h3 class="alert-info">{{ $pizza->price }}</h3><br />
    </div>


    <a href="/adm/home">Click here to go back to CMS!</a>
@endsection
