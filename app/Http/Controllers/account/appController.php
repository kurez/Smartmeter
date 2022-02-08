<?php

namespace App\Http\Controllers\account;

use App\Http\Controllers\Controller;
use App\Models\Meter;

class appController extends Controller
{
   //dashboard
   public function dashboard(){
      $meters = Meter::count();
      return view('account.dashboard', compact('meters'));
   }
}
