<?php

namespace App\Http\Controllers;

use App\Models\form;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        $title='personal-portfolio';
        $name='I’m Md Nazmul Hossain';
        $designation='Laravel Developer';
        return view('home',compact(['name','designation','title']));
    }
    public function submit_form(){
        $this->validate(request(),[
            'name'=>'required',
            'email'=>'required',
            'details'=>'required'
        ]);
        $submit=form::create([
            'name'=>request('name'),
            'email'=>request('email'),
            'details'=>request('details')
        ]);
        return redirect()->back();
    }
    public function download()
    {
        // $file="./public/download/info.pdf";
        $file="./download/info.pdf";
        // return Response::download($file);
        // return Response::download($file);
        return response()->download($file);

    }
}
