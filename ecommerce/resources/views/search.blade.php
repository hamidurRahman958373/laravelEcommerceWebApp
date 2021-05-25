@extends('master')
@section('content')
<div class="container custom-product search_product">
    <div class="row">
        <h3 class="text-center">Your Search Products</h3>
        <div class=".trending-wrapper">
       <!-- Serach wrapper -->
        <div class="">
            @foreach ($products as $item)
                <div class="trendig-item ">
                    <a href="detail/{{ $item['id']}}">
                    <img class="trending-img" src="{{ $item['gallery'] }}" >
                    <div class="">
                        <h2>{{ $item['name'] }}</h2>
                    </div>
                    </a>
                </div>
            @endforeach
        </div>
        <!-- Serach wrapper end -->
    </div>
    </div>
</div>
@endsection
