<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->

                {{-- normal table  --}}
                <li class="nav-header">Dashboard</li>
                <li class="nav-item">
                    <a href="/About" class="nav-link{{Request::is('')?'active':''}}">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            About Me
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/Fact" class="nav-link{{Request::is('')?'active':''}}">
                        <i class="nav-icon far fa-lightbulb"></i>
                        <p>
                            Facts
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/Skill" class="nav-link">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>
                            Skills
                        </p>
                    </a>
                </li>
                {{-- dropdown table  --}}
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Resume
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ml-3 ">
                        <li class="nav-item">
                            <a href="/Resume/summary" class="nav-link">
                              <i class="fa fa-sticky-note"></i>
                                <p class="pl-1">Summary</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/Resume/education" class="nav-link">
                                <i class="fas fa-graduation-cap"></i>
                                <p>Education</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/Resume/experrience" class="nav-link">
                                 <i class="fas fa-laptop-code"></i>
                                 <p>Experience</p>
                            </a>
                        </li>
                    </ul>
                  </li>
                {{-- dropdown end  --}}
                  <li class="nav-item">
                        <a href="/Portfolio" class="nav-link">
                              <i class="nav-icon fas fa-briefcase"></i>
                              <p>
                                    Portfolio
                              </p>
                        </a>
                  </li>
                  <li class="nav-item">
                        <a href="/Service" class="nav-link">
                              <i class="nav-icon fas fa-wrench"></i>
                              <p>
                                    Services
                              </p>
                        </a>
                  </li>
                  <li class="nav-item">
                        <a href="/Testimonial" class="nav-link">
                              <i class="nav-icon fas fa-quote-left"></i>
                              <p>
                                    Testimonials
                              </p>
                        </a>
                  </li>
                    {{-- dropdown table  --}}
                    <li class="nav-item ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-phone" aria-hidden="true" style="transform: rotate(100deg);"></i>
                        <p>
                            Contact
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ml-3 ">
                        <li class="nav-item">
                            <a href="/Contact/information" class="nav-link">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                <p class="pl-1">Information</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/Contact/form" class="nav-link">
                                <i class="fa fa-envelope-open" aria-hidden="true"></i>
                                <p class="pl-1">Send Mail</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- dropdown end  --}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
