<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryVe;
use DB; 
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\CategoryVeRequest;
use Toastr;
use Alert;
use App\Models\Order;
use App\Models\User;
use App\Models\Payment;
class CategoryVeController extends Controller
{

    // public function __construct() {
    //     $this->middleware('auth');
    // }
    public function index(){
        $category_ve = DB::table('category_ve')->get();
        $order_count =  Order::count();
        $user_count =  User::count();
        $pay_count =  Payment::count();
        $data = [
            'category_ve' => $category_ve,
            'order_count' => $order_count,
            'pay_count' => $pay_count,
            'user_count' => $user_count,
        ];
        return view('admin.category_ve.show',$data);
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
        return view('admin.category_ve.add',$data);
    }


    public function store( CategoryVeRequest $request){
        $data = $request->all();

        $category_ve = new CategoryVe();
        $category_ve->name= $data['name'];
        $category_ve->price= $data['price'];
    
        $category_ve->save(); 
        return Redirect::to("category-ve");
    }

    public function show($id){
        return view('admin.event.update');
    }

    public function edit($id)
    {
        $category_ve = CategoryVe::find($id);
        $order_count =  Order::count();
        $user_count =  User::count();
        $pay_count =  Payment::count();
        $data = [
            'category_ve' =>$category_ve,
            'order_count' => $order_count,
            'pay_count' => $pay_count,
            'user_count' => $user_count,
        ];
        return view('admin.category_ve.update',$data);
    }
    public function update(CategoryVeRequest $request, $id)
    {
        $data = $request->all();
      
        $category_ve = CategoryVe::find($id);
        $category_ve->name= $data['name'];
        $category_ve->price= $data['price'];
        $category_ve->save();

        return Redirect::to("category-ve");
    }

    public function delete($id)
    {
     $category_ve =  CategoryVe::find($id);
     $category_ve->delete();
      return Redirect::to("category-ve");
    }


}