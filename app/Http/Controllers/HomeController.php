<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('home.index');
    }
    public function test(){
        return view('home.test');
    }
    public function param($id,$number){

        echo "Parameter 1:",$id;
        echo "Parameter 2:",$number;
        echo "Parameter 2:",$number + $id;
        return view('home.test2',
                    [
            'id' => $id,
            'number' => $number,


        ]);

    }

    public function save(Request $request){
       // echo "Index Function";
       // echo "Name:",$_REQUEST["fname"];
       // echo "LastName:",$_REQUEST["lname"];
      return view('home.test2',
            [
                'fname' => $_REQUEST["fname"],
                'lname' => $_REQUEST["lname"]


            ]);
    }
}
