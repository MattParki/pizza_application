@extends('layouts.app')
@section('content')
<div class="wrapper create-pizza">
    <h1>All Pizzas & prices</h1>

    <div>
        <div class="wrapper pizza-index">
            <div class="pizza-item">
                <img src="/img/pizza.png" alt="pizza icon">
                <h4></h4><p class="testing1" id="testing1">Pizza price: <p class="testing2" id="testing2">£</p>
                <form action="{{ route('pizzas.editPizza', ['id' => $pizza->id])}}" method="post">
                    @csrf
                    <input type="text"  name="name" placeholder="New name">
                    <input type="text"  name="price" placeholder="New price">
                    <input type="submit">
                </form>

            </div>
        </div>
    </div>

    <br />

</div>
<div class="flex-center position-ref">
    <a href="/">Click here to go back home!</a>
</div>
<br />
<div class="flex-center position-ref">
    <a href="/home">Click here to go back to CMS!</a>
</div>


@endsection
