@extends('layouts.app')
@section('title','Dashboard')
@section('content')
@include('partials.add-meter-modal')
   <div class="row">
      <div class="col-lg-4">
         <div class="token-statistics card card-token height-auto">
            <div class="card-innr">
               <div class="token-balance token-balance-with-icon">
                  <div class="token-balance-icon"><img src="assets/images/logo-light-sm.png" alt="logo"></div>
                  <div class="token-balance-text">
                     <h6 class="card-sub-title">Tokens Balance</h6>
                     <span class="lead">432</span>
                  </div>
               </div>
               <div class="token-balance token-balance-s2">
                  <h6 class="card-sub-title">This Month</h6>
                  <ul class="token-balance-list">
                     <li class="token-balance-sub"><span class="lead">100</span><span class="sub">Current</span></li>
                     <li class="token-balance-sub"><span class="lead">1,265</span><span class="sub">Used</span></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- .col -->
      <div class="col-lg-8">
         <div class="token-information card card-full-height">
            <div class="row no-gutters height-100">
               <div class="col-md-6 text-center">
                  <div class="token-info">
                     <img class="token-info-icon" src="assets/images/logo-sm.png" alt="logo-sm">
                     <div class="gaps-2x"></div>
                     <h1 class="token-info-head text-light">1 Token = 25 ksh</h1>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="token-info bdr-tl">
                     <div>
                        <ul class="token-info-list">
                           <li><span>Total Meters:</span>{{ $meters->count() }}</li>
                           <li><span>Active Meters:</span>0</li>
                        </ul>
                        <a href="#" class="btn btn-primary"><em class="fas fa-eye mr-3"></em>View Meters</a>
                        <a href="{{ url('/add-meter') }}" class="btn btn-primary"><em class="fas fa-plus mr-3"></em>Add Meter</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- .card -->
      </div>
      <!-- .col -->
      <div class="col-xl-8 col-lg-7">
         <div class="token-transaction card card-full-height">
            <div class="card-innr">
               <div class="card-head has-aside">
                  <h4 class="card-title">Transaction</h4>
                  <div class="card-opt"><a href="transactions.html" class="link ucap">View ALL <em class="fas fa-angle-right ml-2"></em></a></div>
               </div>
               <table class="table tnx-table">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>Meter</th>
                        <th>Amount</th>
                        <th>Tokens</th>
                        <th class="d-none d-sm-table-cell tnx-date">Date</th>
                        <th class="tnx-type"><div class="tnx-type-text"></div></th>
                     </tr>
                     <!-- tr -->
                  </thead>
                  <!-- thead -->
                  <tbody>
                     <tr>
                        <td>1</td>
                        <td>MR-3453-RTY</td>
                        <td>
                           <div class="d-flex align-items-center"><span class="lead">2,000</span></div>
                        </td>
                        <td><span><span class="lead">31</span></span></td>
                        <td class="d-none d-sm-table-cell tnx-date"><span class="sub sub-s2">2022-01-24 10:20 PM</span></td>
                        <td class="tnx-type">
                           <span class="tnx-type-md badge badge-outline badge-warning badge-md">View</span>
                           <span class="tnx-type-sm badge badge-sq badge-outline badge-warning badge-md">v</span>
                        </td>
                     </tr><!-- tr -->
                     <tr>
                        <td>2</td>
                        <td>TX-3453-RTY</td>
                        <td>
                           <div class="d-flex align-items-center"><span class="lead">2,000</span></div>
                        </td>
                        <td><span><span class="lead">31</span></span></td>
                        <td class="d-none d-sm-table-cell tnx-date"><span class="sub sub-s2">2022-01-24 10:20 PM</span></td>
                        <td class="tnx-type">
                           <span class="tnx-type-md badge badge-outline badge-warning badge-md">View</span>
                           <span class="tnx-type-sm badge badge-sq badge-outline badge-warning badge-md">v</span>
                        </td>
                     </tr><!-- tr -->
                     <tr>
                        <td>3</td>
                        <td>BN-3453-RTY</td>
                        <td>
                           <div class="d-flex align-items-center"><span class="lead">2,000</span></div>
                        </td>
                        <td><span><span class="lead">31</span></span></td>
                        <td class="d-none d-sm-table-cell tnx-date"><span class="sub sub-s2">2022-01-24 10:20 PM</span></td>
                        <td class="tnx-type">
                           <span class="tnx-type-md badge badge-outline badge-warning badge-md">View</span>
                           <span class="tnx-type-sm badge badge-sq badge-outline badge-warning badge-md">v</span>
                        </td>
                     </tr><!-- tr -->
                     <tr>
                        <td>4</td>
                        <td>WE-3453-RTY</td>
                        <td>
                           <div class="d-flex align-items-center"><span class="lead">2,000</span></div>
                        </td>
                        <td><span><span class="lead">31</span></span></td>
                        <td class="d-none d-sm-table-cell tnx-date"><span class="sub sub-s2">2022-01-24 10:20 PM</span></td>
                        <td class="tnx-type">
                           <span class="tnx-type-md badge badge-outline badge-warning badge-md">View</span>
                           <span class="tnx-type-sm badge badge-sq badge-outline badge-warning badge-md">v</span>
                        </td>
                     </tr><!-- tr -->
                  </tbody>
                  <!-- tbody -->
               </table><!-- .table -->
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
   <!-- .row -->
   <div class="row">
      <div class="col-xl-12 col-lg-12">
         <div class="token-sale-graph card card-full-height">
            <div class="card-innr">
               <div class="card-head has-aside">
                  <h4 class="card-title">Usage Per Month</h4>

               </div>
               <div class="chart-tokensale">
                  <canvas id="tknSale"></canvas>
               </div>
            </div>
         </div><!-- .card -->
      </div>
   </div>
   <!-- .row -->
@endsection
