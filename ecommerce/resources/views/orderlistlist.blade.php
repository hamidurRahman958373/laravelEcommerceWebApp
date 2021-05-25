<div class="form">
    <div class="text">
        <h1>Order List</h1>
    </div>

<table  id="customers">
    <tr class="headin">
        <td>id</td>
        <td>product_id</td>
        <td>user_id</td>
        <td>status</td>
        <td>payment_method</td>
        <td>payment_status</td>
        <td>address</td>
        <td>operation</td>
    </tr>
    @foreach ($orders as $item)
      <tr>
        <td>{{ $item['id'] }}</td>
        <td>{{ $item['product_id'] }}</td>
        <td>{{ $item['user_id'] }}</td>
        <td>{{ $item['status'] }}</td>
        <td>{{ $item['payment_method'] }}</td>
        <td>{{ $item['payment_status'] }}</td>
        <td>{{ $item['address'] }}</td>
        <td>
        <div class="link">
                <a href={{ "editproduct/".$item['id'] }}>approved</a>
             </div>
    </td>
    </tr>
    @endforeach
</table>
<div class="pagination">
   <span >{{ $orders->links() }}</span>
</div>
</div>

<style>
    body{
        text-align: center;
    }
    .form{
        border-radius: 10px ;

        height: 100vh;
        margin: 0 auto;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;
    }
    .form .text {
         border-radius: 10px ;
        width: 100%;
        display: inline-block;
        background-color: #36e909;
       box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
       margin-bottom: 15px;
    }
     .form .text h1 {
        display: inline-block;
        color: #000;

    }


.form #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 98%;
  margin: 0 auto;
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

 .form #customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}
 .form #customers .headin{
     background-color: #25800f;
     color: #fff;
 }
  .form #customers .headin:hover{
     background-color: #25800f;
     color: #fff;
 }
.form #customers tr:nth-child(even){background-color: #f2f2f2;}

.form #customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
 .form #customers td .link{
   display: flex;
   max-width: 100%;
   flex: wrap;
   align-items: center;
   justify-content: space-around;


 }
 .form #customers td .link a{
        flex-basis:0 0 50%;
         max-width: 50%;
        text-decoration: none;
        padding: 6px 3px;
        font-family: 'Roboto', sans-serif;
        font-size: 12px;
        text-transform: uppercase;
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
  .form #customers td .link a:hover{
       background-color: #2EE59D;
        box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
        color: #fff;
        transform: translateY(-7px);
  }
  .form .pagination{
     margin-top: 10px;
  }
  .form span{
      font-size: 22px;
      font-weight: 600;
      text-decoration: none;
      color: #36e909;

  }
  .w-5{
        height: 15px;

    }
</style>
