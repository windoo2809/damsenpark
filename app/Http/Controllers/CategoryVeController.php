<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryVe;
use DB; 
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\CategoryVeRequest;
use Toastr;
use Alert;
class CategoryVeController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }
    public function index(){
        $category_ve = DB::table('category_ve')->get();
        $data = [
            'category_ve' => $category_ve,
        ];
        return view('admin.category_ve.show',$data);
    }

    public function create(){
        return view('admin.category_ve.add');
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
        $data = [
            'category_ve' => $category_ve,
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