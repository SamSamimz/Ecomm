@extends('layouts.main')

@section('content')
{{-- <h1 class="text-center">Home</h1> --}}
<header>
    <div class="bg-secondary">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    @foreach ($products as $item)
        
    <div class="carousel-item active" data-bs-interval="10000">
        <img height="500" src="{{$item->avatar}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block slider-content">
            <h5>{{$item->title}}</h5>
            <p>{{$item->description}}</p>
        </div>
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev slider-button" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next slider-button" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
</header>

{{-- Trending Products --}}
<div class="products-wrapper">
    <div class="container">
        {{--  --}}
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

        {{--  --}}
        <h1 class="header py-3 text-center">Treanding Products</h1>
        <div class="product-box">
            @foreach ($products as $item)
            <div class="product mb-3 rounded text-center">
            <a href="{{route('product.item', $item)}}">
                <img class="my-2" height="220" width="240" src="{{$item->avatar}}" alt="">
                <h5>{{$item->title}}</h5>
            </a>
                {{-- <h6 class="text-secondary">{{$item->description}}</h6>
                <p class="text-scondary">Price : <span class="text-danger">{{$item->price}}$</span></p> --}}
                <form action="" method="" class="mb-3">
                    <button type="submit" class="btn btn-warning text-white">Add to cart</button>
                </form>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection