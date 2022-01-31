<div class="topbar-wrap">
   <div class="topbar is-sticky">
      <div class="container">
         <div class="d-flex justify-content-between align-items-center">
            <ul class="topbar-nav d-lg-none">
               <li class="topbar-nav-item relative">
                  <a class="toggle-nav" href="#">
                     <div class="toggle-icon">
                        <span class="toggle-line"></span>
                        <span class="toggle-line"></span>
                        <span class="toggle-line"></span>
                        <span class="toggle-line"></span>
                     </div>
                  </a>
               </li><!-- .topbar-nav-item -->
            </ul><!-- .topbar-nav -->
            <a class="topbar-logo" href="{!! url('/') !!}"> <h2 class="text-white">Smart Meter</h2>{{-- <img src="#" srcset="#" alt="logo"> --}}</a>
            <ul class="topbar-nav">
               <li class="topbar-nav-item relative">
                  <span class="user-welcome d-none d-lg-inline-block">Welcome! Stefan Harary</span>
                  <a class="toggle-tigger user-thumb" href="#"><em class="ti ti-user"></em></a>
                  <div class="toggle-class dropdown-content dropdown-content-right dropdown-arrow-right user-dropdown">
                     <div class="user-status">
                        <h6 class="user-status-title">Token balance</h6>
                        <div class="user-status-balance">403 TP</div>
                     </div>
                     <ul class="user-links">
                        <li><a href=#"><i class="ti ti-id-badge"></i>My Profile</a></li>
                        <li><a href="#"><i class="ti ti-eye"></i>Activity</a></li>
                     </ul>
                     <ul class="user-links bg-light">
                        <li><a href="#"><i class="ti ti-power-off"></i>Logout</a></li>
                     </ul>
                  </div>
               </li><!-- .topbar-nav-item -->
            </ul><!-- .topbar-nav -->
         </div>
      </div><!-- .container -->
   </div>
   <!-- .topbar -->
   <div class="navbar">
      <div class="container">
         <div class="navbar-innr">
            <ul class="navbar-menu">
               <li><a href="{!! url('/') !!}"><em class="ikon ikon-dashboard"></em> Dashboard</a></li>
               <li><a href="#"><em class="ikon ikon-coins"></em> Meters </a></li>
               <li><a href="#"><em class="ikon ikon-transactions"></em> Transactions</a></li>
               <li><a href=#"><em class="ikon ikon-exchange"></em> Settings</a></li>
               {{-- <li class="has-dropdown page-links-all">
                  <a class="drop-toggle" href="#"><em class="ikon ikon-exchange"></em> Pages</a>
                  <ul class="navbar-dropdown">
                     <li class="has-dropdown"><a class="drop-toggle" href="#">UI Elements</a>
                        <ul class="navbar-dropdown">
                           <li><a href="form-elements.html">Form Elements</a></li>
                           <li><a href="form-layout.html">Form Layout</a></li>
                           <li><a href="form-validation.html">Form Validation <span class="badge badge-warning">New</span></a></li>
                        </ul>
                     </li>
                  </ul>
               </li> --}}
            </ul>
         </div>
         <!-- .navbar-innr -->
      </div>
      <!-- .container -->
   </div>
   <!-- .navbar -->
</div>
