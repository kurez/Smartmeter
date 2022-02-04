@extends('layouts.app')
@section('title','Add Meter')
@section('content')
<h2>Add Meter</h2>
<form action="{{ route('submit-meter') }}" method="post">
   @csrf
   <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
         <label for="f_name">Meter Number</label>
         <input id="token-base-amount" class="input-bordered input-with-hint" name="meter_number" value="{{ old('meter_number') }}" type="text">
         <x-error for="meter_number"></x-error>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
         <label for="f_name">IMEI</label>
         <input id="token-base-amount" class="input-bordered input-with-hint" name="imei" value="{{ old('imei') }}" type="text">
         <x-error for="imei"></x-error>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
         <label for="f_name">ICCID</label>
         <input id="token-base-amount" class="input-bordered input-with-hint" name="iccid" value="{{ old('iccid') }}" type="text">
         <x-error for="iccid"></x-error>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
         <label for="f_name">Address</label>
         <input id="token-base-amount" class="input-bordered input-with-hint meter-address" name="address" value="{{ old('address') }}" type="text">
         <x-error for="address"></x-error>
      </div>
   </div>
   <br>
   <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection
