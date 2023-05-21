
<style>
.img-fluid{
  max-width:100%;
  height:auto;
}

</style>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="{{url('/admin/dashboard')}}" class="logo logo1 d-flex align-items-center bg-white">
        <img src="{{asset('Backend/img/logo-bill.png')}}" alt="" class="img-fluid" style="max-height: 59px;">
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->
        
        <li class="nav-item dropdown pe-3">
        @php
          $id=session('ADMIN_ID');
          $data=DB::table('admins')->where('id',$id)->first();
        @endphp
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          @if(@$data->image=='')
            <img src="{{asset('Backend/images/dummy-image.jpg')}}" class="rounded-circle" alt="Profile">
          @elseif($data->image)
            <img src="{{ asset('Backend/images/'.$data->image)}} " class="rounded-circle"  alt="Profile">
          @endif
                      
            <span class="d-none d-md-block dropdown-toggle ps-2">{{@$data->name}}</span>
            
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{@$data->name}}</h6>
              <!-- <span>Web Designer</span> -->
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{url('/admin/users-profile')}}">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <!-- <li>
              <hr class="dropdown-divider">
            </li> -->

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{url('admin/logout')}}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->