@extends('master')
@section('content')
<div class="container custom-product text-center">
    <div class="col-sm-10">
       <!-- Serach wrapper -->
        <div class="trending-wrapper">
            <h3 class="text-center">Your Cart Items</h3>
            <a class="btn btn-success " href="/ordernow">Order Now</a><br><br>
            @foreach ($products as $item)
                <div class="row search-item cartlist-diveder">
                    <div class="col-sm-3">
                       <a href="detail/{{ $item->id}}">
                    <img class="trending-img" src="{{ $item->gallery }}" >
                    </a>
                    </div>
                    <div class="col-sm-5">
                       <a href="detail/{{ $item->id}}">
                    <div class="">
                        <h2>{{ $item->name }}</h2>
                        <h5>{{ $item->discription }}</h5>
                    </div>
                    </a>
                    </div>
                    <div class="col-sm-4">
                      <a href="/removecart/{{ $item->carts_id }}">
                        <button class="btn btn-warning">Remove to cart</button>
                    </a>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Serach wrapper end -->
    </div>
</div>
@endsection
