<?php

namespace App\Http\Controllers\account;

use App\Http\Controllers\Controller;
use App\Models\Meter;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class appController extends Controller
{
   //dashboard
   public function dashboard(){
      $meters = Meter::all();
      return view('account.dashboard', compact('meters'));
   }

   // Add Meter
   public function addMeter() {
      return view('account.add-meter');
   }

   public function meters() {
      $meters = Meter::all();
      return view('account.meters', compact('meters'));
   }

   public function submitMeter(Request $request) {
      $rules = [
         'f_name' => ['required', 'string'],
         'l_name' => ['required', 'string'],
         'phone_number' => ['required', new PhoneNumber],
         'email' => ['required', 'email'],
         'imei' => ['required'],
         'iccid' => ['required'],
         'address' => ['required']
      ];
      $messages = [
         'required' => 'Please enter this field'
      ];

      Validator::make($request->all(), $rules, $messages)->validate();

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

      return redirect()->route('dashboard')->with('success', 'Meter added successfully');
   }
}
