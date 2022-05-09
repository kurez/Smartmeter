<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use DB;

class MeterMode extends Component
{
   public $meter;

   public function changeMode()
   {
    
      if ($this->meter->mode == 'postpaid')
      {
         $response = Http::post('http://pl.numeraliot.com:8010/meter/power', [
            // 'address' => '020009212000',
            'address' => trim($this->meter->address), 
            'imei' => $this->meter->imei,
            'mode' => 'prepaid'
        ]);
   
        DB::table('meters')
               ->where('address', trim($this->meter->address))
               ->update(['mode' => 'prepaid']);
      }
      else 
      {
         $response = Http::post('http://pl.numeraliot.com:8010/meter/power', [
            // 'address' => '020009212000',
            'address' => trim($this->meter->address),
            'imei' => $this->meter->imei,
            'mode' => 'postpaid'
        ]);
   
        DB::table('meters')
               ->where('address', trim($this->meter->address))
               ->update(['mode' => 'postpaid']);
      }

      return $response;
   
   }
   public function render()
   {
      return view('livewire.meter-mode');
   }
}
