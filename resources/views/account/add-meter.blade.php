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
         <input id="token-base-amount" class="input-bordered input-with-hint" name="imei" type="text" value="861245050814630">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
         <label for="f_name">ICCID</label>
         <input id="token-base-amount" class="input-bordered input-with-hint" name="iccid" type="text" value="89254021264260877372">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
         <label for="f_name">Address</label>
         <input id="token-base-amount" class="input-bordered input-with-hint meter-address" name="address" value="002021090001" type="text">
         {{-- <input id="token-base-amount" class="input-bordered input-with-hint meter-address" name="address" type="text"> --}}
      </div>
   </div>
   <br>
   <button type="submit" class="btn btn-primary">Add</button>
</form>
@push('scripts')
   <script>
      // $('.meter-address').on('keyup', function() {
      //    // console.log($(this).val());
      //    let address = formatAddress($(this).val())

      //    console.log(address.reverse().toString())
      // })

      // function formatAddress(address, n=2) {
      //    // let newAddress = address.replace(/(\d{2})/g, '$1 ').replace(/(^\s+|\s+$)/,' ')
      //    var ret = [];
      //    var i;
      //    var len;

      //    for(i = 0, len = address.length; i < len; i += n) {
      //       ret.push(address.substr(i, n))
      //    }

      //    return ret
      //    // let newAddress = address.replace(/(.{2})/g, "$1 ")
      //    // let completeAddress = newAddress.split(' ').reverse().toString().replace(',', ' ')
      //    // console.log(completeAddress);
      //    // return completeAddress
      // }
   </script>
@endpush
@endsection
