<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\CategoryVe;
use App\Models\Ve;
use App\Models\User;
use App\Models\Payment;
use App\Http\Requests\DatveRequest;
use DB;
Use Alert;
use Illuminate\Support\Facades\Session;


class VeController extends Controller
{
  public function index(){
    $order_ve = Order::all();
    $order_count =  Order::count();
    $user_count =  User::count();
    $pay_count =  Payment::count();
      $data = [
            'order_ve' => $order_ve,
             'order_count' => $order_count,
             'user_count' => $user_count,
             'pay_count' => $pay_count,
       ];
    return view('admin.order_ve.show',$data);
  }

  public function add(){
      return view('add');
  }

  public function insert(DatveRequest $request){
     $category_id = CategoryVe::find($request->category_id);
     $total = ($request->quantily)*($category_id->price);

      $ve_id = mt_rand(1,1000);

     $data = $request-> all();
      $order = new Order();
      $order->name = $request->input('name');
      $order->category_id = $request->input('category_id');
      $order->ve_id = $ve_id;
      $order->email = $request->input('email');
      $order->phone = $request->input('phone');
      $order->quantily = $request->input('quantily');
      $order->date = $request->input('date');
      $order->save();

      session()->put('quantily', $request->quantily);
      session()->put('phone',$request->phone );
      session()->put('date',$request->date);
      session()->put('name',$request->name);
      session()->put('email',$request->email );
      session()->put('total', $total);
      session()->put('ve_id', $ve_id);
      session()->put('category_id',$request->input('category_id') );


      return Redirect::to('thanh-toan')->with('success','Đặt vé thành công!!');
  }



  public function delete($id)
  {
    $order_ve =  Order::find($id);
    $order_ve->delete();
    return Redirect::to("show-order");
  }

}