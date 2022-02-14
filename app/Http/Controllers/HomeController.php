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
    
    public function thanhcong(){
        return view('layout.thanhcong');
    }

    public function dashboard(){
        return view('admin.dashboard');
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
        $data = [
            'user' => $user,
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