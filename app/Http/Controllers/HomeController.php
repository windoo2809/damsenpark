<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Auth;

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
       return view('layout.contact');
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

    public function getregister() {
        return view('layout.register');
    }

    public function postregister(Request $request) {
        $user = new User();
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->save();

        return Redirect::to("login");
    }
}
