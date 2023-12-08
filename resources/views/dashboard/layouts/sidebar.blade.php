<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary" style="background-color: #cf9006;">
  <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
    aria-labelledby="sidebarMenuLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="sidebarMenuLabel">Data Siswa SMK</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
        aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
      <ul class="nav flex-column">
        <li class="nav-item">
          <form class="d-flex" role="search">
            <input class="form-control mt-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-info mt-2 " type="submit">
              <svg class="bi">
                <use xlink:href="#search" />
              </svg></button>
          </form>
          <a class="nav-link d-flex align-items-center gap-2 mt-2 {{ Request::is('dashboard') ? 'active' : '' }}"
            aria-current="page" href="/dashboard">
            <svg class="bi">
              <use xlink:href="#house-fill" />
            </svg>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard') ? 'active' : '' }}"
            href="/dashboard/data">
            <svg class="bi">
              <use xlink:href="#people" />
            </svg>Data Siswa
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard') ? 'active' : '' }}" href="#">
            <svg class="bi">
              <use xlink:href="#file-earmark" />
            </svg>
            Administration
          </a>
        </li>
        <h6
          class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <svg class="bi">
              <use xlink:href="#plus-circle" />
            </svg>
          </a>
        </h6>
        <hr class="my-3">

        <ul class="nav flex-column mb-auto">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
              <svg class="bi">
                <use xlink:href="#gear-wide-connected" />
              </svg>
              Settings
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/">
              <svg class="bi">
                <use xlink:href="#door-closed" />
              </svg>
              Logout
            </a>
            @csrf
          </li>
        </ul>
      </ul>
    </div>
  </div>
</div>