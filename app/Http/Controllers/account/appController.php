<?php

namespace App\Http\Controllers\account;

use App\Http\Controllers\Controller;
use App\Models\Meter;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AppController extends Controller
{
   //dashboard
   public function dashboard(){
      $meters = Meter::count();
      return view('account.dashboard', compact('meters'));
   }
}
