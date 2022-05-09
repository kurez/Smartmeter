<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meter;
use App\Rules\PhoneNumber;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use DB;

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
         // 'address' => ['required']
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
      // $address = (chunk_split(implode(array_reverse(str_split($address, 2))),2, ' '));
      $address = (implode(array_reverse(str_split($address, 2))));
      $meter->address = $address;
      $meter->save();

      return redirect()->route('meter', $meter)->with('success', 'Meter added successfully');
   }

   // meter recharge
   public function rechargeMeter (Request $request) 
   {
      $response = Http::post('http://pl.numeraliot.com:8010/meter/recharge', [
         // 'address' => '020009212000',
         'address' => $request->input('address'), 
         'imei' => $request->input('imei'),
         'amount' => $request->input('amount'),
     ]);

     $current_bal = DB::select('select balance from meters where address = :address', ['address' => $request->input('address') ]);
     $amount = $request->input('amount');
     $new_bal = $current_bal[0]->balance + $amount;

     DB::table('meters')
               ->where('address', $request->input('address'))
               ->update(['balance' => $new_bal]);

      
      return $response;

   }

   public function balanceCallBack(Request $request)
   {
      $topic = $request->topic;
      switch ($topic) {
         
            // receives all messages from device ( balance/mode)
         case '/msg':
            $msg = Message::create([
               'address' => $request->data['address'],
               'balance' => $request->data['balance']
            ]);

            $current_bal = DB::select('select balance from meters where address = :address', ['address' => $request->data['address'] ]);
            $amount = $request->input('amount');
            $new_bal = $current_bal[0]->balance + $amount;

            DB::table('meters')
               ->where('address', $request->data['address'])
               ->update(['balance' => $new_bal]);

            if ($msg) {
               return response()->json(['data' => $msg, 'status' => 'Saved successfully'], 200);
            }

            return response()->json(['status' => 'Error saving data'], 422);
            break;

         default:
            return response()->json(['status' => 'Error in the data sent'], 422);
            break;
      }

   }

   public function powerCallBack(Request $request)
   {
      $topic = $request->topic;
      switch ($topic) {
         
         case '/msg':
            $msg = Message::create([
               'address' => $request->data['address'],
               'status' => $request->data['status']
            ]);

            if ($msg) {
               return response()->json(['data' => $msg, 'status' => 'Saved successfully'], 200);
            }

            return response()->json(['status' => 'Error saving data'], 422);
            break;

         default:
            return response()->json(['status' => 'Error in the data sent'], 422);
            break;
      }

   }


}
