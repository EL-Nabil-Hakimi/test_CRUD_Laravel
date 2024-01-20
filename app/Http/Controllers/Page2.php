<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class Page2 extends Controller
{
    public static function index(Request $request){
        $name = $request->name;
        echo $name;
        echo "<br>";
        return view('page2');

    }


    public function create(Request $request){
        $name = $request->name;
        $age = $request->age;
        $number  = $request->number;

        $insert  = new UserModel();
        $insert->Insert($name , $age , $number);

        return redirect('/page2');
    }
}
