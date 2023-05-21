<!-- ======= Sidebar ======= -->

<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{url('/admin/dashboard')}}"><i class="bi bi-house-door-fill"></i><span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link  {{ (request()->segment(2) == 'social' || request()->segment(2) == 'organization' || request()->segment(2) == 'blog' || request()->segment(2) == 'faq' || request()->segment(2) == 'hallmarks' || request()->segment(2) == 'team' || request()->segment(2) == 'excellence' || request()->segment(2) == 'testimonials' || request()->segment(2) == 'services' || request()->segment(2) == 'pricing' || request()->segment(2) == 'slider' || request()->segment(2) == 'contact')? '' : 'collapsed'}}" data-bs-toggle="collapse" data-bs-target="#setting-nav" aria-expanded="false" aria-controls="collapse">
                <i class="bi bi-collection-fill"></i><span>Management</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="setting-nav" class="nav-content  {{ (request()->segment(2) == 'social' || request()->segment(2) == 'organization' || request()->segment(2) == 'blog' || request()->segment(2) == 'faq' || request()->segment(2) == 'hallmarks' || request()->segment(2) == 'team' || request()->segment(2) == 'excellence' || request()->segment(2) == 'testimonials' || request()->segment(2) == 'services' || request()->segment(2) == 'pricing' || request()->segment(2) == 'services' || request()->segment(2) == 'slider' || request()->segment(2) == 'event'|| request()->segment(2) == 'cms')? ' show' : 'collapse'}}" data-bs-parent="#sidebar-nav" >
            
            <li class="nav-item">
                <a href="{{url('admin/home')}}" class="{{ (request()->segment(2) == 'slider') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Home</span>
                    </a>
            </li>
            <li class="nav-item">
                    <a href="{{url('admin/Artist')}}" class="{{ (request()->segment(2) == 'event') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>The Artist</span>
                    </a>
            </li>
            <li class="nav-item">
                    <a href="{{url('admin/Approach')}}" class="{{ (request()->segment(2) == 'blog') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>The Approach</span>
                    </a>
            </li>
            <li>
               
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link  {{ (request()->segment(2) == 'listing' || request()->segment(2) == 'features')? '' : 'collapsed'}}" data-bs-toggle="collapse" data-bs-target="#features-nav" href="#">
                <i class="bi bi-inboxes"></i><span>Features</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="features-nav" class="nav-content  {{ (request()->segment(2) == 'listing' || request()->segment(2) == 'features')? ' show' : 'collapse'}}" data-bs-parent="#sidebar-nav" >
                <li>
                    <a href="{{url('/admin/listing')}}" class="{{ (request()->segment(2) == 'listing') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Listing</span>
                    </a>
                </li>
        </ul>
        <ul id="features-nav" class="nav-content  {{ (request()->segment(2) == 'listing' || request()->segment(2) == 'features')? ' show' : 'collapse'}}" data-bs-parent="#sidebar-nav" >
                <li>
                    <a href="{{url('/admin/Billworks')}}" class="{{ (request()->segment(2) == 'features') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Bill Works</span>
                    </a>
                </li>
        </ul>
    </li>
        <!-- End Dashboard Nav -->
        
        
        <!-- End subCategories Page Nav -->
        <li class="nav-item">
            <a class="nav-link  {{ (request()->segment(2) == 'submitted-contact' || request()->segment(2) == 'tickets')? '' : 'collapsed'}}" data-bs-toggle="collapse" data-bs-target="#submissions-nav" href="#">
                <i class="bi bi-inboxes"></i><span>Submissions</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="submissions-nav" class="nav-content  {{ (request()->segment(2) == 'submitted-contact' || request()->segment(2) == 'tickets')? ' show' : 'collapse'}}" data-bs-parent="#sidebar-nav" >
                <li>
                    <a href="{{url('admin/submitted-contact')}}" class="{{ (request()->segment(2) == 'submitted-contact') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Contact</span>
                    </a>
                </li>
        </ul>
    </li>
                <li class="nav-item">
            <a class="nav-link collapsed" href="{{url('/admin/general_settings')}}"> 
            <i class="bi bi-gear-fill"></i><span>General Settings</span>
            </a>
        </li>
        <!-- End subCategories Page Nav -->
       

      

        

        



        

    </ul>

    

</aside><!-- End Sidebar-->
