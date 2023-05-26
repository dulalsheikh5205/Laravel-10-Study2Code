<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function hello(){
        return "Hello World";
    }
    
    // function helloView(){
    //     return view('helloview');
    // }

    // function helloView(){
    //     return view('helloview',['name'=>'John Doe']);
    // }
    
    function helloView($name){
        return view('helloview',['name'=>$name]);
    }
}
