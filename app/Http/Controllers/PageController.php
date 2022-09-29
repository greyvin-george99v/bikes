<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
            return view('allproducts');
    }
}
