@extends('layouts.app')
@section('content')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza & add price</h1>
    <form action="{{ route('pizzas.storePizza') }}" method="post">
        @csrf
        <label for="type">Choose Pizza Name</label>
        <input type="text" name="name">
        <label for="type">Set Pizza Price</label>
        <input type="text" name="price"><br />
        <input type="submit" class="test123">
    </form>
    <!-- listing all of the pizzas below that are created -->

    <br />
    <div>
        <!-- success message if pizza is created -->
        <p class="mssg2">{{ session('mssg2') }}</p>
    </div>

    <div class="">
        <a href="/pizzas/createthepizza/display">Click here to see all pizzas created</a>
    </div>



         <!-- delete the pizzas -->
    <div>
        <p class="delete">{{ session('deletePrice') }}</p>
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
