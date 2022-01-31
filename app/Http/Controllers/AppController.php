<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meter;

class AppController extends Controller
{
   //dashboard
   public function dashboard(){
      $meters = Meter::count();
      return view('account.dashboard', compact('meters'));
   }
}
