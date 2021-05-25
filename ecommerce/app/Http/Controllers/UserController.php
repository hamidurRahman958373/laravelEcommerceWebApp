<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Session;

class UserController extends Controller
{
    function login(Request $req){
        $user = User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password)){
            return "username or password not matched";
        }else{
            $req->session()->put("user",$user);
            return redirect('/');
        }
    }
    function register(Request $req){
         //return $req->input();
         $user = new User;
         $user->name=$req->name;
         $user->email=$req->email;
         $user->password=Hash::make($req->password);
         $user->save();
         return redirect('/login');

    }

    function registerAdmin(Request $req){
         $admin = new Admin;
         $admin->name=$req->name;
         $admin->email=$req->email;
         $admin->password=Hash::make($req->password);
         $admin->save();
         return redirect('/adminlogin');
    }

    function adminlogin(Request $req){
        $admin = Admin::where(['email'=>$req->email])->first();
        if(!$admin || !Hash::check($req->password,$admin->password)){
            return "username or password not matched";
        }else{
            $req->session()->put("admin",$admin);
            return redirect('/adminpanel');
        }
    }
    function listuser(){
        $data = User::all();
        return view('listuser',['users'=>$data]);
    }
    function listadmin(){
        $data = Admin::all();
        return view('listadmin',['admins'=>$data]);
    }
      function delete($id){
        $data = User::find($id);
        $data->delete();
        return redirect('listuser');
    }

     function showData($id){
         $data = User::find($id);
         return view('edituser',['data'=>$data]);
    }
    function update( Request $req){
       $data = User::find($req->id);
       $data->name=$req->name;
       $data->email=$req->email;
       $data->password=Hash::make($req->password);

       $data->save();
       return redirect('listuser');
    }
    function pagination(){
         $data = User::paginate(5);
          return view('listuser',['users'=>$data]);
    }
    function pagination2(){
         $data = Admin::paginate(5);
          return view('listadmin',['admins'=>$data]);
    }
}