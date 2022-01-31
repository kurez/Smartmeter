@extends('layouts.app')
@section('title','Add Meter')
@section('content')
<h2>Add Meter</h2>
<form action="{{ route('submit-meter') }}" method="post">
   @csrf
   <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
         <label for="f_name">First Name</label>
         <input id="token-base-amount" class="input-bordered input-with-hint" name="f_name" value="{{ old('f_name') }}" type="text">
         <x-error for="f_name"></x-error>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
         <label for="f_name">Last Name</label>
         <input id="token-base-amount" class="input-bordered input-with-hint" name="l_name" {{ old('l_name') }} type="text">
         <x-error for="l_name"></x-error>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
         <label for="f_name">Phone Number</label>
         <input id="token-base-amount" class="input-bordered input-with-hint" name="phone_number" value="{{ old('phone_number') }}" type="number">
         <x-error for="phone_number"></x-error>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
         <label for="f_name">Email</label>
         <input id="token-base-amount" class="input-bordered input-with-hint" name="email" value="{{ old('email') }}" type="email">
         <x-error for="email"></x-error>
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
