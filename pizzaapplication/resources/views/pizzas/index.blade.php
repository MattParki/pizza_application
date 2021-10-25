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
        </div>
    </div>
</div>

@extends('templates.footer.footer')
