@extends('layouts.app')
@section('title', 'Meters')
@section('content')
<a href="{{ url('/add-meter') }}" class="btn btn-primary mb-2"><em class="fas fa-plus mr-3"></em>Add Meter</a>
<!-- <a href="{{ url('/power-meter') }}" class="btn btn-primary mb-2"><em class="fas fa-plus mr-3"></em>Power</a> -->
<div class="token-transaction card card-full-height">
   <div class="card-innr">
      <div class="card-head has-aside">
         <h4 class="card-title">Meters</h4>
         <div class="card-opt"><a href="transactions.html" class="link ucap">View ALL <em class="fas fa-angle-right ml-2"></em></a></div>
      </div>
      <table class="table tnx-table">
         <thead>
            <tr>
               <th>Meter</th>
               <th>IMEI</th>
               <th>ICCID</th>
               <th>Address</th>
               <th>Status</th>
               <th>Mode</th>
               <th>Balance</th>
               <th class="tnx-type"><div class="tnx-type-text"></div></th>
            </tr>
            <!-- tr -->
         </thead>
         <!-- thead -->
         <tbody>
            @foreach ($meters as $meter)
               <tr>
                  <td>{{ $meter->meter_number }}</td>
                  <td>
                     <div class="d-flex align-items-center"><span class="lead">{{ $meter->imei }}</span></div>
                  </td>
                  <td><span><span class="lead">{{ $meter->iccid }}</span></span></td>
                  <td><span class="sub sub-s2">{{ $meter->address }}</span></td>
                  <td><span class="sub sub-s2">{{ $meter->status }}</span></td>
                  <td><span class="sub sub-s2">{{ $meter->mode }}</span></td>
                  <td><span class="sub sub-s2">{{ $meter->balance }}</span></td>
                  <td class="tnx-type">
                     <span class="tnx-type-md badge badge-outline badge-warning badge-md">
                        <a href="{{ route('meter', $meter) }}">View</a>
                     </span>
                     <span class="tnx-type-sm badge badge-sq badge-outline badge-warning badge-md">v</span>
                  </td>
               </tr><!-- tr -->
            @endforeach
         </tbody>
         <!-- tbody -->
      </table><!-- .table -->
   </div>
</div>
@endsection
