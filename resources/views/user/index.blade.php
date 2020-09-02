@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{route('home')}}" class="btn btn-sm btn-primary">Back</a>
        <div class="row ">
            @foreach($carts as $cart)
                <div class="col-sm-4 mb-3">
                    <div class="jumbotron jumbotron-fluid">
                        <h1 class="display-4">{{$cart->fname}} {{$cart->lname}}</h1>
                        <p class="lead"></p>
                        <hr class="my-4">
                        <p> Total price: {{$cart->total_price}}</p>
                        @foreach($cart->services as $service)
                            <p>{{$service->name}}</p>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
