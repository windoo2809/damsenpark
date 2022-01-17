<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Http\Requests\DatveRequest;

class VeController extends Controller
{
  public function index(){
    return view('layout.welcome');
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
      return redirect('add')->with('status', 'ok');
  }
}