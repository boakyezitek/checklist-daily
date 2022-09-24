<div class="left-sidenav">
  <!-- LOGO -->
  <div class="brand">
      <a href="crm-index.html" class="logo">
          <span>
              <img src="images/logo-sm.png" alt="logo-small" class="logo-sm">
          </span>
          <span>
              <img src="images/logo.png" alt="logo-large" class="logo-lg logo-light">
              <img src="images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
          </span>
      </a>
  </div>
  <!--end logo-->
  <div class="menu-content h-100" data-simplebar>
      <ul class="metismenu left-sidenav-menu">
          <li class="menu-label mt-0">Main</li>
          <li>
              <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
              <ul class="nav-second-level" aria-expanded="false">
                  <li>
                      <a href="javascript: void(0);"><i class="ti-control-record"></i>Email <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                      <ul class="nav-second-level" aria-expanded="false">
                          <li><a href="apps-email-inbox.html">Inbox</a></li>
                          <li><a href="apps-email-read.html">Read Email</a></li>
                      </ul>
                  </li>  
                  <li class="nav-item"><a class="nav-link" href="index.html"><i class="ti-control-record"></i>Analytics</a></li>
                  <li class="nav-item"><a class="nav-link" href="crm-index.html"><i class="ti-control-record"></i>CRM</a></li>
                  <li class="nav-item"><a class="nav-link" href="helpdesk-index.html"><i class="ti-control-record"></i>Helpdesk</a></li>
                  <li class="nav-item"><a class="nav-link" href="sales-index.html"><i class="ti-control-record"></i>Sales</a></li> 
              </ul>
          </li> 
          <li>
            <a href="{{ route('admin.pages.index') }}"> <i data-feather="file" class="align-self-center menu-icon"></i><span>Pages</span></a>
        </li>         
      </ul>
  </div>
</div>
<!-- end left-sidenav-->