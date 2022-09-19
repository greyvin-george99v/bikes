<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
   function index(){
    return view('user.index');
   }

   function profile(){
       return view('user.profile');
   }
   function settings(){
       return view('users.settings');
   }
}
