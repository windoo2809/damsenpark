<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Http\Requests\DatveRequest;
use DB;
Use Alert;

class VeController extends Controller
{
  public function index(){
    $order_ve = Order::all();
        $data = [
            'order_ve' => $order_ve,
        ];
    return view('admin.order_ve.show',$data);
  }

  public function add(){
      return view('add');

  }
  public function insert(DatveRequest $request){
      $order = new Order();
      $order->name = $request->input('name');
      $order->category_id = $request->input('category_id');
      $order->email = $request->input('email');
      $order->phone = $request->input('phone');
      $order->quantily = $request->input('quantily');
      $order->date = $request->input('date');

      $order->save();
      return redirect('thanh-toan')->with('success','Đặt vé thành công!!');
  }

  public function pay(Request $request)
  {
      return view('layout.payment');
  }

  public function delete($id)
  {
  $order_ve =  Order::find($id);
   $order_ve->delete();
    return Redirect::to("show-order");
  }

}