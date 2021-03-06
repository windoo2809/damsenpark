<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Http\Requests\EventRequest;
use App\Models\Order;
use App\Models\User;
use App\Models\Payment;
use DB;

class EventController extends Controller
{
    public function index(){
        $event = event::all();
        $order_count =  Order::count();
        $user_count =  User::count();
        $pay_count =  Payment::count();
        $data = [
            'event' =>$event,
            'order_count' => $order_count,
            'pay_count' => $pay_count,
            'user_count' => $user_count,
        ];
        return view('admin.event.show',$data);
    }

    public function create(){
        $order_count =  Order::count();
        $user_count =  User::count();
        $pay_count =  Payment::count();
        $data = [
            'order_count' => $order_count,
            'pay_count' => $pay_count,
            'user_count' => $user_count,
        ];
        return view('admin.event.add',$data);
    }


    public function store( EventRequest $request){
        $data = $request->all();
        $image = $request->file('image');
        $imagename = $image;                                 
        $imagename = $image->getClientOriginalName();                                 
        $storedPath = $image->move('img', $image->getClientOriginalName());
        
        $event = new event();
        $event->name= $data['name'];
        $event->image =  $imagename; 
        $event->price= $data['price'];
        $event->summary =  $data['summary'];
        $event->daystar= $data['daystar'];
        $event->dayend= $data['dayend'];
        $event->titlecontent= $data['titlecontent'];
        $event->content= $data['content'];
        $event->content1= $data['content1'];
        $event->save(); 
        
        return Redirect::to("event");
    }

    public function show($id){
        return view('admin.event.update');
    }

    public function edit($id)
    {
        $event = event::find($id);
        $order_count =  Order::count();
        $user_count =  User::count();
        $pay_count =  Payment::count();
        $data = [
            'event' => $event,
            'order_count' => $order_count,
            'pay_count' => $pay_count,
            'user_count' => $user_count,
        ];
        return view('admin.event.update',$data);
    }
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $image = $request->file('image');
        $imagename = $image->getClientOriginalName();                                 
        $storedPath = $image->move('img', $image->getClientOriginalName());

        $event = event::find($id);
        $event->name= $data['name'];
        $event->image =  $imagename; 
        $event->price= $data['price'];
        $event->summary =  $data['summary'];
        $event->daystar= $data['daystar'];
        $event->dayend= $data['dayend'];
        $event->titlecontent= $data['titlecontent'];
        $event->content= $data['content'];
        $event->content1= $data['content1'];

        $event->save();
        return Redirect::to("event");
    }

    public function delete($id)
    {
     $event =  event::find($id);
     $event->delete();
      return Redirect::to("event");
    }

}
