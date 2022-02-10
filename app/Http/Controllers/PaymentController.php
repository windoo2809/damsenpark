<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
// use App\Http\Requests\CategoryVeRequest;
use Toastr;
use Alert;

class PaymentController extends Controller
{
    public function index(){
        $payment = DB::table('pay')->get();
        $data = [
            'payment' => $payment,
        ];
        return view('admin.payment.show',$data);
    }

    public function pay(){
        
    }
}
