<?php

namespace App\Http\Controllers\account;

use App\Http\Controllers\Controller;
use App\Models\Meter;
use Illuminate\Http\Request;

class appController extends Controller
{
   //dashboard
   public function dashboard(){
      return view('account.dashboard');
   }

   // Add Meter
   public function addMeter() {
      return view('account.add-meter');
   }

   public function submitMeter(Request $request) {
      $meter = new Meter;
   }
}
