<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
  <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-0 mb-1 text-body-secondary text-uppercase">
        <span>ADMINISTRATION</span>
      </h6>

      <hr />

      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2 {{ Route::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
            @svg('icons.dial', 'i-25 fill-white mr-2')
            Dashboard
          </a>
        </li>
      </ul>


      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-5 mb-0 text-body-secondary text-uppercase">
        <span>USER MENU</span>
      </h6>
      <ul class="nav flex-column mt-0 mb-auto">
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="#">
            @svg('icons.conversate', 'i-25 fill-white mr-2')
            Profile
          </a>
        </li>
        <li class="nav-item">
          <a class="{{ Route::is('profile.edit') ? 'active nav-link' : 'nav-link' }} d-flex align-items-center gap-2">
            @svg('icons.conversate', 'i-25 fill-white mr-2')
            {{ Auth::user()->name }}
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="#">
            @svg('icons.conversate', 'i-25 fill-white mr-2')
            Sign out
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
