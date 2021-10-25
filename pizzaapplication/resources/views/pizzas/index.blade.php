@extends('templates.header.header')

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
           Pizza list
        </div>
        <div class="pizza-div">

            @foreach($pizzas as $pizza)
                <div>
                    {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }}
                </div>
            @endforeach
                <div>
                    <p class="delete">{{ session('delete') }}</p>
                </div>
        </div>
    </div>
</div>
<div class="flex-center position-ref">
    <a href="/">Click Here to go back home!</a>
</div>

@extends('templates.footer.footer')
