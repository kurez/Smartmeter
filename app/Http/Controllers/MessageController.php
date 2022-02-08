<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
   public function addMessage(Request $request)
   {
      $topic = $request->topic;
      switch ($topic) {
         case '/ping':
            $ping = Message::create([
               'version' => $request->data["version"],
               'imei' => $request->data{"imei"},
               'iccid' => $request->data["iccid"],
               'address' => $request->data{"address"},
               'signal' => $request->data["signal"]
            ]);

            if ($ping) {
               return response()->json(['data' => $ping, 'status' => 'Message saved successfully'], 200);
            }

            return response()->json(['status' => 'Error saving data'], 422);
            break;
         case '/msg':
            $msg = Message::create([
               'address' => $request->data["address"],
               'status' => $request->data["status"]
            ]);

            if ($msg) {
               return response()->json(['data' => $msg, 'status' => 'Saved successfully'], 200);
            }

            return response()->json(['status' => 'Error saving data'], 422);
            break;
         case '/login':
            $login = Message::create([
               'imei' => $request->data["imei"],
            ]);

            if ($login) {
               return response()->json(['data' => $login, 'status' => 'Saved successfully'], 200);
            }

            return response()->json(['status' => 'Error saving data'], 422);
            break;

         default:
            return response()->json(['status' => 'Error in the data sent'], 422);
            break;
      }

   }

   public function allMessages()
   {
      $messages = Message::all();

      return response()->json(['messages' => $messages], 200);
   }
}


