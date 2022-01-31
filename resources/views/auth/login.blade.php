<!DOCTYPE html>
<html lang="zxx" class="js">
   @section('title','Login')
   @include('partials._head')
   <body class="page-ath">
      <div class="page-ath-wrap">
         <div class="page-ath-content">
            <div class="page-ath-header">
               <a href="#" class="page-ath-logo">
                  {{-- <img src="{!! asset('assets/images/logo.png') !!}" srcset="{!! asset('assets/images/logo2x.png 2x') !!}" alt="logo"> --}}
               </a>
            </div>
            <div class="page-ath-form">
               <h2 class="page-ath-heading">Sign in <small>with your Token Account</small></h2>
               <form action="{!! route('dashboard') !!}">
                  <div class="input-item">
                     <label for="">Your Email</label>
                     <input type="text" placeholder="Your Email" class="input-bordered">
                  </div>
                  <div class="input-item">
                     <label for="">Password</label>
                     <input type="password" placeholder="Password" class="input-bordered">
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                     <div class="input-item text-left">
                        <input class="input-checkbox input-checkbox-md" id="remember-me" type="checkbox">
                        <label for="remember-me">Remember Me</label>
                     </div>
                     <div><a href="#">Forgot password?</a><div class="gaps-2x"></div></div>
                  </div>
                  <button class="btn btn-primary btn-block">Sign In</button>
               </form>
               <div class="gaps-2x"></div>
               <div class="gaps-2x"></div>
               {{-- <div class="form-note">Don’t have an account? <a href="sign-up.html"> <strong>Sign up here</strong></a></div> --}}
            </div>
            <div class="page-ath-footer">
               <ul class="footer-links">
                  <li><a href="regular-page.html">Privacy Policy</a></li>
                  <li><a href="regular-page.html">Terms</a></li>
                  <li>&copy; 2022 Smart Meter.</li>
               </ul>
            </div>
         </div>
         <div class="page-ath-gfx">
            <div class="w-100 d-flex justify-content-center">
               <div class="col-md-8 col-xl-5">
                  {{-- <img src="{!! asset('assets/images/ath-gfx.png') !!}" alt="image"> --}}
               </div>
            </div>
         </div>
      </div>
      <!-- JavaScript (include all script here) -->
      <script src="{!! asset('assets/js/jquery.bundle.js') !!}"></script>
      <script src="{!! asset('assets/js/script.js') !!}"></script>
   </body>
</html>
