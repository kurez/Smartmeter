<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class MeterStatus extends Component
{
   public $meter;

   public function changeStatus()
   {
      $status = Http::post(config('services.niot.api_url'), [
         'address' => $this->meter->address,
         'imei' => $this->meter->imei,
         'status' => $this->meter->status == 'on' ? 'off' : 'on'
      ]);

      dd(json_decode($status));
   }
   public function render()
   {
      return view('livewire.meter-status');
   }
}
