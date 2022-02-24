<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\Order;
use App\Models\CategoryVe;
use App\Models\Ve;
use App\Models\User;
use App\Models\Payment;
use Toastr;
use Alert;
use PDF;
use Illuminate\Pagination\Paginator;

use Carbon\Carbon;

class PaymentController extends Controller
{
    public function index(){
        $payment = DB::table('pay')->paginate(10);
        $order_count =  Order::count();
        $user_count =  User::count();
        $pay_count =  Payment::count();
        $data = [
            'payment' => $payment,
            'order_count' => $order_count,
            'pay_count' => $pay_count,
            'user_count' => $user_count,
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

        $quantily = $request->session()->get('quantily');
        for($i=0;$i<($quantily);$i++){
        $code='DSVE'.''.mt_rand(1,1000);
        $category_id = $request->session()->get('category_id');
        $ve_id = $request->session()->get('ve_id');
        Ve::create([
            've_id' => $ve_id,
            'code' => $code,
            'category_id' => $category_id,
        ]);
        }
        
       $vedat = DB::table('ve')->where('ve_id',$ve_id)->get();
       session()->put('vedat', $vedat);
        return Redirect::to('thanh-cong')->with('success','Thanh toán thành công!!');
    }
    public function inve($id)
    {   
        $currentTime = Carbon::now('Asia/Ho_Chi_Minh');
        $ngayin=$currentTime->toDateTimeString();
        // $vedat = DB::table('ve')->where('ve_id',$id)->get();
        $vedat = session()->get('vedat');
    
        $pdf = PDF::loadView('layout.pdf',['vedat'=>$vedat,'ngayin'=>$ngayin]);
        return $pdf->download('Ve-DamSenPark.pdf');
        $request->session()->flush();
    }
    public function delete($id)
    {
     $payment =  Payment::find($id);
     $payment->delete();
      return Redirect::to("payment");
    }
    function status_update($id)
{
	//get product status with the help of product ID
	$payment = DB::table('pay')
				->select('status')
				->where('id','=',$id)
				->first();

	//Check user status
	if($payment->status == '1'){
		$status = '0';
	}else{
		$status = '1';
	}

	//update product status
	$values = array('status' => $status );
	DB::table('pay')->where('id',$id)->update($values);

	session()->flash('msg','Product status has been updated successfully.');
    return Redirect::to("payment");
}
}