<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function getHomeView(){
    	return view("pages.home");
    } 
    public function getLoginView(){
    	return view("pages.loginview");
    }
}

