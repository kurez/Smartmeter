@extends('layouts.app')
@section('title','Add Meter')
@section('content')
<h2>Add Meter</h2>
<form action="{{ route('submit-meter') }}" method="post">
   <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
         <label for="f_name">First Name</label>
         <input id="token-base-amount" class="input-bordered input-with-hint" type="text">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
         <label for="f_name">Last Name</label>
         <input id="token-base-amount" class="input-bordered input-with-hint" type="text">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
         <label for="f_name">Phone Number</label>
         <input id="token-base-amount" class="input-bordered input-with-hint" type="number">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
         <label for="f_name">Email</label>
         <input id="token-base-amount" class="input-bordered input-with-hint" type="email">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
         <label for="f_name">IMEI</label>
         <input id="token-base-amount" class="input-bordered input-with-hint" type="text">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
         <label for="f_name">ICCID</label>
         <input id="token-base-amount" class="input-bordered input-with-hint" type="text">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
         <label for="f_name">Address</label>
         <input id="token-base-amount" class="input-bordered input-with-hint" type="text">
      </div>
   </div>
   <br>
   <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection
