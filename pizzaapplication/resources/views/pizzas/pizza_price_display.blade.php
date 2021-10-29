@extends('layouts.app')
@section('content')
    <div class="wrapper create-pizza">
        <h1>All Pizzas & prices</h1>
        <div>
            <div class="wrapper pizza-index">
            <ul>
            @foreach($pizzas as $pizza)
                    <div class="pizza-item">
                        <img src="/img/pizza.png" alt="pizza icon">
                        <h4>{{ $pizza['name'] }}</h4><p class="testing1" id="testing1">Pizza price: <p class="testing2" id="testing2">£{{ $pizza->price }}</p><a href="/pizzas/createthepizza/display/pizza_edit/{{ $pizza->id }}"><p id="testing3">Edit</p></a>
                    </div>
            @endforeach
            </ul>
            <div>
                <!-- success message if pizza is created -->
                <p class="mssg4">{{ session('mssg4') }}</p>
            </div>
        </div>
        <br />
    </div>
    <div class="flex-center position-ref">
        <a href="/pizzas/createthepizza">Click here to create new pizza!</a>
    </div>
    <br />
    <div class="flex-center position-ref">
        <a href="/adm/home">Click here to go back to CMS!</a>
    </div>


@endsection
