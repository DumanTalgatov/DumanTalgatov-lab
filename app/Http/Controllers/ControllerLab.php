<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lab;

class ControllerLab extends Controller
{
    //
    public function index(){
        $labs = Lab::all();
        return view('blog.main');
    }
    public function store(Request $request){
        $labs = new Lab();
        
            $labs->name=$request->name;
            $labs->surname=$request->surname;
            $labs->email=$request->email;
            $labs->image=$request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/images/', $labs->image);
            // $labs->move('public/images/', $request->image);
            $labs->save();
        return redirect()->route('blog');
        
    }
}
