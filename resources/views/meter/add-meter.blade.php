@extends('layouts.app')
@section('title','Add Meter')
@section('content')
<h2>Add Meter</h2>
<form action="{{ route('submit-meter') }}" method="post">
   @csrf
   <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
         <label for="meter_number">Meter Number</label>
         <input id="imei" class="input-bordered input-with-hint" name="meter_number" value="{{ old('meter_number') }}" type="text">
         <x-error for="meter_number"></x-error>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
         <label for="imei">IMEI</label>
         <input id="imei" class="input-bordered input-with-hint" name="imei" value="{{ old('imei') }}" type="text">
         <x-error for="imei"></x-error>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
         <label for="icci">ICCID</label>
         <input id="iccid" class="input-bordered input-with-hint" name="iccid" value="{{ old('iccid') }}" type="text">
         <x-error for="iccid"></x-error>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
         <label for="address">Address</label>
         <input id="address" class="input-bordered input-with-hint meter-address" name="address" value="{{ old('address') }}" type="text">
         <x-error for="address"></x-error>
      </div>
   </div>
   <br>
   <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection
