<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Http\Requests\DatveRequest;

class VeController extends Controller
{
    public function index(){
        return view('layout.body');
    }

    public function store(DatveRequest $request){
        $data = $request->all();
        
        $order = new Order();
        $order->name= $data['name'];
        $order->save(); 
        
        return Redirect::to("body");
    }
}
