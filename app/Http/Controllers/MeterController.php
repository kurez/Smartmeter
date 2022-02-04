<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meter;
use App\Rules\PhoneNumber;
use Illuminate\Support\Facades\Validator;

class MeterController extends Controller
{
   // Add Meter
   public function addMeter() {
      return view('meter.add-meter');
   }

   public function meters() {
      $meters = Meter::all();
      return view('meter.meters', compact('meters'));
   }

   public function meter(Meter $meter)
   {
      return view('meter.meter', compact('meter'));
   }

   public function submitMeter(Request $request) {
      $rules = [
         'meter_number' => ['required'],
         'imei' => ['required'],
         'iccid' => ['required'],
         'address' => ['required']
      ];
      $messages = [
         'required' => 'Please enter this field'
      ];

      Validator::make($request->all(), $rules, $messages)->validate();

      $meter = new Meter;
      $meter->meter_number = $request->meter_number;
      $meter->imei = $request->imei;
      $meter->iccid = $request->iccid;
      // Format address
      $address = $request->address;
      $address = (chunk_split(implode(array_reverse(str_split($address, 2))),2, ' '));
      $meter->address = $address;
      $meter->save();

      return redirect()->route('meter', $meter)->with('success', 'Meter added successfully');
   }
}
