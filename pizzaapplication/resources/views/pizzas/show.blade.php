@extends('layouts.app')
@section('content')

<div class="wrapper pizza-details">
    <h1> Order for {{ $pizza->name }} </h1>
        <p class="type">Type - {{ $pizza->type }} </p>
        <p class="base">Base - {{ $pizza->base }} </p>
        <p class="price">Price - {{ $pizza->price }} </p>
        <p class="toppings">Extra Toppings: </p>
        <ul>
            @foreach ($pizza->toppings as $topping)
                <li> {{ $topping }} </li>
            @endforeach
        </ul>
    <div class="delete">
        <form action="/pizzas/{{ $pizza->id }}" method="post">
            @csrf
            @method('delete')
            <button>Complete Order</button>
        </form>

    </div>

</div>

<div>
    <a href="/pizzas" class="back"><- Back to all pizzas</a>
</div>

@endsection
