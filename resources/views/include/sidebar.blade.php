    <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu">
      <div class="h-100" data-simplebar>
        <!-- User box -->
        <div class="user-box text-center">
          <img src="{{asset('assets/images/users/user-1.jpg')}}" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md" />
          <p class="text-muted mt-2">Admin Head</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
          <ul id="side-menu">
            <li class="menu-title mt-2">INVENTORY</li>

            <li>
              <a href="{{ route('dashboard')}}">
              <i class="fa-solid fa-gauge"></i>
                <span>Dashboard</span>
              </a>
            </li>

            <li>
              <a href="#sidebarEcommerce" data-toggle="collapse">
                <i data-feather="users"></i>
                <span> Parties </span>
                <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebarEcommerce">
                <ul class="nav-second-level">
                  <li>
                    <a href="{{route('party.add')}}"><i data-feather="plus" class="pr-0 mr-1"></i>Add
                      Party</a>
                  </li>
                  <li>
                    <a href="{{route('party.index')}}"><i data-feather="list" class="pr-0 mr-1"></i>Manage
                      Parties</a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a href="#sidebarCrm" data-toggle="collapse">
                <i data-feather="edit"></i>
                <span> GST Billing </span>
                <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebarCrm">
                <ul class="nav-second-level">
                  <li>
                    <a href="{{ route('bill.add')}}"><i data-feather="plus" class="pr-0 mr-1"></i>Create
                      bill</a>
                  </li>
                  <li>
                    <a href="{{ route('bill.index')}}"><i data-feather="list" class="pr-0 mr-1"></i>Manage all
                      bills</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>
      </div>
      <!-- Sidebar -left -->
    </div>
    <!-- Left Sidebar End -->