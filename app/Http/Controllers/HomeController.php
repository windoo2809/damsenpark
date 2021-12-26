<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
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

    public function contact(){
        return view('layout.contact');
    }

    public function detailvents(){
        return view('layout.detail-event');
    }

    public function payment(){
        return view('layout.payment');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

}
