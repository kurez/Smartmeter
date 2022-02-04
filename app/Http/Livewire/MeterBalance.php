<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class MeterBalance extends Component
{
   public $meter;

   public function getBalance()
   {
      $response = Http::post(config('services.niot.api_url'), [
         'address' => $this->meter->address,
         'imei' => $this->meter->imei,
         'mode' => 'prepaid'
      ]);

      dd(json_decode($response));
   }

   public function render()
   {
      return view('livewire.meter-balance');
   }
}
