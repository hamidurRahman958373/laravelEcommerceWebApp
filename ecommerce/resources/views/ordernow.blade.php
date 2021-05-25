@extends('master')
@section('content')
<div class="container custom-product  order-price ">
    <h1>Your Order Price</h1>
    <div class="col-sm-6 ">
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td>Price</td>
                    <td>{{ $total }} Taka</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Delevery</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>Total Price</td>
                    <td>{{ $total+100 }}</td>
                </tr>
            </tbody>
        </table>
        <form action="orderplace" method="POST">
            @csrf
            <div class="form-group">
            <textarea name="address"  placeholder="Enter your  valid phone number and Address" class="form-control" ></textarea>
            </div>
            <div class="form-group">
                <label for="">Payment Method</label>
                <p> <input  type="radio" name="payment"><span> Online Payment </span></p>
                <p> <input type="radio" name="payment"><span> Payment on Delevery</span></p>
            </div>
            <button  type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
