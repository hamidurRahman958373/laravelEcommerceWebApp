@extends('master')
@section('content')
<div class="container custom-product order">
    <div class="col-sm-10">
       <!-- Serach wrapper -->
        <div class="">
            <h3 class="text-center">My Orders</h3>
            @foreach ($orders as $item)
                <div class="row  cartlist-diveder">
                    <div class="col-sm-6">
                       <a href="detail/{{ $item->id}}">
                    <img class="trending-img" src="{{ $item->gallery }}" >
                    </a>
                    </div>
                    <div class="col-sm-6">
                    <div class="">
                        <h2>Name : {{ $item->name }}</h2>
                        <h5>Delevery Status : {{ $item->status }}</h5>
                        <h5>Address : {{ $item->address }}</h5>
                        <h5>Payment_Status : {{ $item->payment_status }}</h5>
                        <h5>Payment Method : {{ $item->payment_method }}</h5>
                    </div>
                    </a>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Serach wrapper end -->
    </div>
</div>
@endsection
