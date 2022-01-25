<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function contact($id,$name){
        $arr = array('id' => $id,'name' => $name );
        return view('admin.contact',$arr);
    }
    public function home(){
        return view('admin.home');
    }
}
