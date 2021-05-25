<div class="form">
    <div class="text">
        <h1>User update</h1>
    </div>
    <form action="/edituser" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $data['id'] }}" >
        <input type="text" name="name" value="{{ $data['name'] }}" ><br><br>
        <input type="email" name="email" value="{{ $data['email'] }}" ><br><br>
        <input type="text" name="password" value="{{ $data['password'] }}"><br><br>
        <button type="submit">update User</button>
    </form>
</div>

<style>
    body{
        text-align: center;
    }
    .form{
        border-radius: 10px ;
        width: 500px;
        height: 500px;
        margin: 0 auto;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;
    }
    .form .text {
         border-radius: 10px ;
        width: 100%;
        display: inline-block;
        background-color: #36e909;
       box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }
     .form .text h1 {
        display: inline-block;
        color: #000;

    }
    .form form{
        margin-top: 50px;
    }
    .form form input{
     margin-top: 15px;
    width: 65%;
    height: 45px;
    font-family: 'Roboto', sans-serif;
    font-size: 13px;
    text-transform: capitalize;
    letter-spacing: 2.5px;
    font-weight: 500;
    color: #000;
    background-color: #fff;
    border: none;
    border-radius: 10px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    transition: all 0.3s ease 0s;
    cursor: pointer;
    outline: none;

    }
    .form form button{
        margin-top: 30px;
        width: 140px;
    height: 45px;
    font-family: 'Roboto', sans-serif;
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 2.5px;
    font-weight: 500;
    color: #000;
    background-color: #fff;
    border: none;
    border-radius: 45px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    transition: all 0.3s ease 0s;
    cursor: pointer;
    outline: none;

    }
    .form form button:hover{
        background-color: #2EE59D;
        box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
        color: #fff;
        transform: translateY(-7px);

    }
    .form form input:hover{
        transform: translateY(-7px);
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }
</style>
