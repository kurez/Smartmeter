@extends('layouts.app')
@section('title','Meter')
@section('content')
   <div class="row">
      <div class="col-lg-4">
         <div class="token-statistics card card-token height-auto">
            <div class="card-innr">
               <div class="token-balance token-balance-with-icon">
                  <div class="token-balance-icon"><img src="{{ asset('assets/images/logo-light-sm.png') }}" alt="logo"></div>
                  <div class="token-balance-text">
                     <h6 class="card-sub-title">Tokens Balance</h6>
                     <livewire:meter-balance :meter="$meter" />
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4">
         <div class="token-statistics card card-token height-auto">
            <div class="card-innr">
               <div class="token-balance token-balance-with-icon">
                  <div class="token-balance-icon"><img src="{{ asset('assets/images/logo-light-sm.png') }}" alt="logo"></div>
                  <div class="token-balance-text">
                     <h6 class="card-sub-title">Meter Status</h6>
                     <livewire:meter-status :meter="$meter" />
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-4 col-lg-5">
         <div class="token-calculator card card-full-height">
            <div class="card-innr">
               <div class="card-head"><h4 class="card-title">Buy Token</h4><p class="card-title-text">Enter amount.</p></div>
               <div class="token-calc">
                  <div class="token-pay-amount">
                     <input id="token-base-amount" class="input-bordered input-with-hint" type="text" value="1">
                  </div>
                  <div class="token-received"><div class="token-eq-sign">=</div><div class="token-received-amount"><h5 class="token-amount">184</h5><div class="token-symbol">Tokens</div></div></div>
               </div>
               <div class="token-calc-note note note-plane">
                  <em class="fas fa-info-circle text-light"></em>
                  <span class="note-text text-light">Tokens calculated based current tokens price (25 ksh)</span>
               </div>
               <div class="token-buy"><a href="#" class="btn btn-primary">Buy Tokens</a></div>
            </div>
         </div>
      </div>
   </div>
@endsection
