<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   
    public function index(){
         //Carregar a view
        return view("users.index");
    }
}
