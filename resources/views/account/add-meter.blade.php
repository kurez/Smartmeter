@extends('layouts.app')
@section('title','Add Meter')
@section('content')
<h2>Add Meter</h2>
<form action="{{ route('submit-meter') }}" method="post">
   @csrf
   <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
         <label for="f_name">First Name</label>
         <input id="token-base-amount" class="input-bordered input-with-hint" name="f_name" type="text">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
         <label for="f_name">Last Name</label>
         <input id="token-base-amount" class="input-bordered input-with-hint" name="l_name" type="text">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
         <label for="f_name">Phone Number</label>
         <input id="token-base-amount" class="input-bordered input-with-hint" name="phone_number" type="number">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
         <label for="f_name">Email</label>
         <input id="token-base-amount" class="input-bordered input-with-hint" name="email" type="email">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
         <label for="f_name">IMEI</label>
         <input id="token-base-amount" class="input-bordered input-with-hint" name="imei" type="text" >
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
         <label for="f_name">ICCID</label>
         <input id="token-base-amount" class="input-bordered input-with-hint" name="iccid" type="text">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
         <label for="f_name">Address</label>
         <input id="token-base-amount" class="input-bordered input-with-hint meter-address" name="address" type="text">
      </div>
   </div>
   <br>
   <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection
