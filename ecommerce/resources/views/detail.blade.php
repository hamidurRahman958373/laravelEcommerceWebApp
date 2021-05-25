@extends('master')
@section('content')
<div class="container details">
    <div class="row">
        <div class="col-sm-6 col_1 ">
           <img class="detail-img" src="{{ $product['gallery'] }}" alt="">
        </div>
        <div class="col-sm-6 col_2">
           <a href="/">Go Back</a>
           <h2>{{ $product['name'] }}</h2>
           <h3>Price : {{ $product['price'] }}</h3>
           <h4>Details : {{ $product['discription'] }}</h4>
           <h5>Category : {{ $product['category'] }}</h5>
           <br><br>
           <form action="/add_to_Cart" method="POST">
               @csrf
               <input type="hidden" name="product_id" value="{{ $product['id'] }} ">
               <button class="btn btn-success">Add to cart</button>
            </form>
           <br><br>
            <button class="btn btn-primary">Buy Now</button>
           <br><br>
        </div>
    </div>

</div>
@endsection
