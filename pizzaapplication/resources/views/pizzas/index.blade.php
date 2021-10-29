@extends('layouts.app')
@section('content')

<div class="wrapper pizza-index">
    <h1>Pizza Orders</h1>

    @foreach($pizzas as $pizza)
        <div class="pizza-item">
            <img src="/img/pizza.png" alt="pizza icon">
            <h4><a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }} </a></h4><p class="testing1" id="testing1">Ordered at: <p class="testing2" id="testing2">{{ $pizza->created_at }}</p>

        </div>

    @endforeach
    <div>
        <p class="delete">{{ session('delete') }}</p>
    </div>
</div>

<div class="flex-center position-ref">
    <a href="/">Click here to go back home!</a>
</div>
<br />
<div class="flex-center position-ref">
<a href="/home">Click here to go back to CMS!</a>
</div>

@endsection
