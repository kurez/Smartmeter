<?php

namespace App\Http\Controllers\account;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
=======
use App\Models\Meter;
>>>>>>> 64bca79cc856e3088588e41e5c60792a9c31f2e6
use Illuminate\Http\Request;

class appController extends Controller
{
   //dashboard
   public function dashboard(){
      return view('account.dashboard');
   }
<<<<<<< HEAD
=======

   // Add Meter
   public function addMeter() {
      return view('account.add-meter');
   }

   public function submitMeter(Request $request) {
      $meter = new Meter;
      $meter->f_name = $request->f_name;
      $meter->l_name = $request->l_name;
      $meter->phone_number = $request->phone_number;
      $meter->email = $request->email;
      $meter->imei = $request->imei;
      $meter->iccid = $request->iccid;
      // Format address
      $address = $request->address;
      $address = (chunk_split(implode(array_reverse(str_split($address, 2))),2, ' '));
      $meter->address = $address;
      $meter->save();

      return back()->with('success', 'Meter added successfully');
   }
>>>>>>> 64bca79cc856e3088588e41e5c60792a9c31f2e6
}
