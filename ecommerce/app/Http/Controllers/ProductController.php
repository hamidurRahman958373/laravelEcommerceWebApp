<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Session\Session as SessionSession;
use Session;

class ProductController extends Controller
{
    function index(){

        $data = Product::all();

        return view('product',['products'=>$data]);
    }
    function detail($id){
       $data= Product::find($id);
       return view('detail',['product'=>$data]);
    }
    function search(Request $req){
        $data = Product::
       where('name','like','%'.$req->input('query').'%')
       ->get();
       return view('search',['products'=>$data]);
    }
    function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }

    }
    static function cartItem(){
       $userId=Session::get('user')['id'];
       return Cart::where('user_id',$userId)->count();
    }
    function cartList(){
        $userId=Session::get('user')['id'];
        $prodcuts=DB::table('carts')
       ->join('products','carts.product_id','=','products.id')
       ->where('carts.user_id',$userId)
       ->select('products.*','carts.id as carts_id')
       ->get();

       return view('cartlist',['products'=>$prodcuts]);
    }
    function removecart($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }
    function ordernow(){
      $userId=Session::get('user')['id'];
      $total= DB::table('carts')
       ->join('products','carts.product_id','=','products.id')
       ->where('carts.user_id',$userId)
       ->sum('products.price');
       return view('ordernow',['total'=>$total]);
    }
    function orderplace(Request $req){
       $userId=Session::get('user')['id'];
       $allCart=Cart::where('user_id',$userId)->get();
       foreach($allCart as $cart){
          $order = new Order;
          $order->product_id=$cart['product_id'];
          $order->user_id=$cart['user_id'];
          $order->status='pending';
          $order->payment_method=$req->payment;
          $order->payment_status='pending';
          $order->address=$req->address;
          $order->save();
          Cart::where('user_id',$userId)->delete();
       }

        $req->input();
        return redirect('/');
    }

    function myOrders(){
       $userId=Session::get('user')['id'];
       $orders= DB::table('orders')
       ->join('products','orders.product_id','=','products.id')
       ->where('orders.user_id',$userId)
       ->get();
       return view('myorders',['orders'=>$orders]);
    }

    function productlist(){
        $data = Product::all();
        return view('productlist',['products'=>$data]);
    }
     function pagination3(){
         $data = Product::paginate(5);
          return view('productlist',['products'=>$data]);
    }
     function orderlistlist(){
        $data = Order::all();
        return view('orderlistlist',['orders'=>$data]);
    }
     function pagination4(){
         $data = Order::paginate(5);
          return view('orderlistlist',['orders'=>$data]);
    }
    function addproduct(Request $req){
         $product = new Product;
         $product->name=$req->name;
         $product->price=$req->price;
         $product->category=$req->category;
         $product->discription=$req->discription;
         $product->gallery=$req->gallery;
         $product->save();

         return redirect('/productlist');
    }
}