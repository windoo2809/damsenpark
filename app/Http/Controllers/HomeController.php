<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Order;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRequest;
use Auth;
use Alert;
use DB;
use App\Models\CategoryVe;
use App\Models\Ve;
use App\Models\Payment;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    
    public function index(){
        return view('add');
    }

    public function event(){
        $events = event::all();
        $data = [
            'events' => $events,
        ];
        return view('layout.event',$data);
    }

    public function detailevent($id){
        $events = event::where('id',$id)->limit(1)->get();
        $data = [
            'events' => $events,
        ];
        return view('layout.detail-event',$data);
    }


    public function contact(){
        return view('layout.contact');
    }
    
    public function sendEmail(ContactRequest $req){
       Mail::send('layout.email',[
           'name' => $req->name,
           'email'=>$req->email,
           'phone' => $req->phone,
           'address'=>$req->address,
           'content' => $req->content,
       ],function($mail) use ($req){
           $mail->to('dinhhn2809@gmail.com', $req->name);
           $mail->from($req->email);
           $mail->subject('Đầm sen Park');
       });
       return redirect('lien-he')->with('success','Gửi email thành công, vui lòng kiểm tra!!');
    }
    public function sendEmails(Request $req ){
        $this->emails = $req->email;
        $data= DB::select("select id, name from category_ve ");
        $ve_id = $req->session()->get('ve_id');
        $data = DB::table('ve')->where('ve_id',$ve_id)->get();
        Mail::send('layout.emaildatve',
            array(
                'data' => $data
              ),
          function($mail) use ($req){
            $mail->to('dinhhn2809@gmail.com', $req->name);
            $mail->from($req->email);
            $mail->subject('Đầm sen Park');
        });
        return redirect()->back();
     }
    
    public function thanhcong(){
        return view('layout.thanhcong');
    }

    public function dashboard(){
        $order_count =  Order::count();
        $user_count =  User::count();
        $pay_count = Payment::count();
        $data = [
            'order_count' => $order_count,
            'user_count' => $user_count,
            'pay_count' => $pay_count,
        ];
        return view('admin.dashboard',$data);
    }

    public function getlogin(){
        return view('layout.login');
    }

    public function postlogin(Request $request){
      $data = [
          'email' => $request->email,
          'password' => $request->password,
      ];
      if(Auth::attempt($data)){
         return view('admin/dashboard', $data);
        }else{
       return redirect('login')->with('error','Sai email hoặc mật khẩu');
    }
    }
    public function getregister() {
        return view('layout.register');
    }

    public function postregister(UserRequest $request) {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
    
        return redirect('register')->with('success','Đăng ký thành công');

    }

    public function logout(Request $request) {
        $request-> session()->forget('id');
        $request-> session()->forget('password');

        return Redirect::to("login");
    }
    public function showuser(){
        $user = User::all();
        $order_count =  Order::count();
        $user_count =  User::count();
        $pay_count = Payment::count();
        $data = [
            'user' =>$user,
            'order_count' => $order_count,
            'pay_count' => $pay_count,
            'user_count' => $user_count,
        ];
    return view('admin.user.show',$data);
    }
    public function deleteuser($id)
  {
  $user =  User::find($id);
   $user->delete();
    return Redirect::to("show-user");
  }

    
}