<!DOCTYPE html>
<html lang="zxx" class="js">
   @include('partials._head')
   <body class="page-user">
      @include('partials._topbar')
      <!-- .topbar-wrap -->
      <div class="page-content">
         <div class="container">
            @yield('content')
         </div>
         <!-- .container -->
      </div>
      <!-- .page-content -->
      <div class="footer-bar">
         <div class="container">
            <div class="row align-items-center justify-content-center">
               <div class="col-md-8">
                  <ul class="footer-links">
                     <li><a href="#">FAQs</a></li>
                     <li><a href="#">Privacy Policy</a></li>
                     <li><a href="#">Terms of Condition</a></li>
                  </ul>
               </div>
               <!-- .col -->
               <div class="col-md-4 mt-2 mt-sm-0">
                  <div class="d-flex justify-content-between justify-content-md-end align-items-center guttar-25px pdt-0-5x pdb-0-5x">
                     <div class="copyright-text">&copy; 2022 Smart Meter.</div>
                  </div>
               </div>
               <!-- .col -->
            </div><!-- .row -->
         </div><!-- .container -->
      </div>
      <!-- .footer-bar -->
      <!-- JavaScript (include all script here) -->
      <script src="{!! asset('assets/js/jquery.bundle.js') !!}"></script>
      <script src="{!! asset('assets/js/script.js') !!}"></script>
<<<<<<< HEAD
=======
      @stack('scripts')
>>>>>>> 64bca79cc856e3088588e41e5c60792a9c31f2e6
   </body>
</html>
