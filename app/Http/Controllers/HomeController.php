<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Http\Requests\DatveRequest;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
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
    
    public function body(DatveRequest $request){
        $data = $request->all();

        $order_ve = new order_ve();
        $order_ve->name= $data['name'];
        $order_ve->pack= $data['pack'];
        $order_ve->email= $data['email'];
        $order_ve->phone= $data['phone'];
        $order_ve->quanlity= $data['quanlity'];
        $order_ve->date= $data['date'];
        $order_ve->save(); 
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
    

    public function payment(){
        return view('layout.payment');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

}
