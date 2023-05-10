<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }
}
