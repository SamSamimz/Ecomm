@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="d-flex align-items-center justify-content-center">
        <div class="p-5" >
            <img width="800" height="400" class="my-2" src="{{$product->avatar}}" alt="">
            <h2>{{$product->title}}</h2>
            <h5>{{$product->description}}</h5>
            <p>Price : <span class="text-danger">{{$product->price}}$</span></p>
            <form action="" method="" class="mb-2">
                <button type="submit" class="btn btn-warning text-white">Add to cart</button>
            </form>
            <form action="" method="">
                <button type="submit" class="btn btn-info text-white">Buy now</button>
            </form>

        </div>
        </div>
    </div>

@endsection