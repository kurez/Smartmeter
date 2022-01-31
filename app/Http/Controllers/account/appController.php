<?php

namespace App\Http\Controllers\account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class appController extends Controller
{
   //dashboard
   public function dashboard(){
      return view('account.dashboard');
   }
}
