@extends('layouts.app')
@section('title', 'Transactions')
@section('content')
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
@endsection
