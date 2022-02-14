<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\Order;
use App\Models\CategoryVe;
use App\Models\Payment;
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
    


    public function getpay(){
        return view('layout.payment');
    }

    public function postpay(Request $request){
      
        $pay = new Payment();
        $pay->number_card = $request->input('number_card');
        $pay->name_card = $request->input('name_card');
        $pay->date_card = $request->input('date_card');
        $pay->CVV_CVC = $request->input('CVV_CVC');
        $pay->save();

        for($i=0;$i<($request->quantily);$i++){
            $code='DSVE'.''.mt_rand(1,1000);
            $category_ve = $request->session()->get('category_ve');
            Order::create([
                'id' => $request->id,
                'code' => $code,
                'category_ve' => $category_ve,
            ]);
        }
        $vedat = DB::table('order_ve')->where('id',$request->id)->get();
        session()->put('id', $request->id_ve);
        session()->put('vedat', $vedat);

        return Redirect::to('thanh-cong')->with('success','Thanh toán thành công!!');
        $request->session()->flush();
    }
}
