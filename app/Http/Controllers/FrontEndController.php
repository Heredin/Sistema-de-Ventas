<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;

use sisVentas\Http\Requests;

class FrontEndController extends Controller
{
    public function index(){
       return view('web.index');
    }
}
