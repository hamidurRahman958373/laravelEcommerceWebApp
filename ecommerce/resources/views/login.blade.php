@extends('master')
@section('content')
<div class="container custom-login" style="height: 500px;">
    <div class="row" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; height:400px;width:800px; margin:0 auto;">
        <h1 class="text-center" style="margin-bottom: 20px">Login Form</h1>
        <div class="col-sm-4 col-sm-offset-4" style="margin-top: 30px">
            <form action="login" method="POST">
                 @csrf
                <div class="mb-3 ">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input name="email" placeholder="Email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="password" placeholder="Password" type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-default btn1">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection
