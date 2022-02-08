<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class MeterBalance extends Component
{
   public $meter;

   public function getBalance()
   {
      $response = Http::post('http://pl.numeraliot.com:8010/meter/balance', [
         // 'address' => '02 00 09 21 20 00',
         'address' => trim($this->meter->address),
         'imei' => $this->meter->imei,
         'mode' => 'prepaid',
     ]);

     return $response;

   }

   public function render()
   {
      return view('livewire.meter-balance');
   }
}
