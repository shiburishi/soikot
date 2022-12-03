<?php

namespace App\Http\Controllers;

use App\Models\person;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return view('index');
    }

    public function form(){
        return view('form');
    }
    public function show(){
        $Data=person::all();
        return view('show',compact('Data'));
    }
    public function store(){

        $name=request('name');
        $roll=request('roll');
        $reg=request('reg');
        person::create([
             'name'=>$name,
             'roll'=>$roll,
             'reg'=>$reg
        ]);
        return redirect('/show');
    }
    public function edit($id){
        $data=person::find($id);
        return view('edit',compact('data'));

    }

    public function update($id){

        $data=person::find($id);

        $name=request('name');
        $roll=request('roll');
        $reg=request('reg');

        $data->name=$name;
        $data->roll=$roll;
        $data->reg=$reg;

        $data->save();

        return redirect('/show');


    }

    public function delete($id){
        $data=person::find($id);
        $data->delete();
        return back();
    }
}
