@extends('templates.header.header')

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
           Pizza list
        </div>
        <div class="pizza-div">
            <div class="wrapper pizza-index">
                <h1>Pizza Orders</h1>
                @foreach($pizzas as $pizza)
                    <div class="pizza-item">
                        <img src="/img/pizza.png" alt="pizza icon">
                        <h4><a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a></h4>
                    </div>
                @endforeach
                <div>
                    <p class="delete">{{ session('delete') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="flex-center position-ref">
    <a href="/">Click Here to go back home!</a>
</div>
<div class="flex-center position-ref">
    <a href="/">test</a>
</div>

@extends('templates.footer.footer')
