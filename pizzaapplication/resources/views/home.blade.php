@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        {{ __('You are now logged in!') }}
                    </div><br />

                    <br />
                    <p><a href="/pizzas">View all pizza orders</a></p>
                    <p><a href="/pizzas/createthepizza">Click to create new pizzas</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
