<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
   public function addMessage(Request $request)
   {
      $message = Message::create([
         'version' => $request->version,
         'imei' => $request->imei,
         'iccid' => $request->iccid,
         'address' => $request->address,
         'signal' => $request->signal
      ]);

      if ($message) {
         return response()->json(['message' => $message, 'status' => 'Message saved successfully'], 200);
      }

      return response()->json(['status' => 'Error saving message'], 422);
   }

   public function allMessages()
   {
      $messages = Message::all();

      return response()->json(['messages' => $messages], 200);
   }
}
