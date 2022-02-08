<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use DB;

class MeterStatus extends Component
{
   public $meter;

   public function changeStatus()
   {
    
      if ($this->meter->status == 'off')
      {
         $response = Http::post('http://pl.numeraliot.com:8010/meter/power', [
            // 'address' => '020009212000',
            'address' => trim($this->meter->address), 
            'imei' => $this->meter->imei,
            'status' => 'on'
        ]);
   
        DB::table('meters')
               ->where('address', trim($this->meter->address))
               ->update(['status' => 'on']);
      }
      else 
      {
         $response = Http::post('http://pl.numeraliot.com:8010/meter/power', [
            // 'address' => '020009212000',
            'address' => trim($this->meter->address),
            'imei' => $this->meter->imei,
            'status' => 'off'
        ]);
   
        DB::table('meters')
               ->where('address', trim($this->meter->address))
               ->update(['status' => 'off']);
      }

      return $response;
   
   }
   public function render()
   {
      return view('livewire.meter-status');
   }
}
