<!-- ====================================
    ——— LEFT SIDEBAR WITH OUT FOOTER
  ===================================== -->
  <aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
      <!-- Aplication Brand -->
      <div class="app-brand">
        <a href="{{ route('dashboard')}}">
          <svg
            class="brand-icon"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="xMidYMid"
            width="30"
            height="33"
            viewBox="0 0 30 33"
          >
            <g fill="none" fill-rule="evenodd">
              <path
                class="logo-fill-blue"
                fill="#7DBCFF"
                d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
              />
              <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
            </g>
          </svg>
          <span class="brand-name">Sleek Dashboard</span>
        </a>
      </div>
      <!-- begin sidebar scrollbar -->
      <div class="sidebar-scrollbar">

        <!-- sidebar menu -->
        <ul class="nav sidebar-inner" id="sidebar-menu">
            <li  class="" >
              <a class="sidenav-item-link" href="{{ route('dashboard')}}">
                <i class="mdi mdi-home-variant"></i>
                <span class="nav-text">Dashboard</span>
              </a>
            </li>
            <hr class="separator" />
            <li  class="has-sub active expand" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                aria-expanded="false" aria-controls="article">
                <i class="mdi mdi-newspaper"></i>
                <span class="nav-text">Article</span> <b class="caret"></b>
              </a>
              <ul  class="collapse show"  id="dashboard"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                  <li  class="" >
                    <a class="sidenav-item-link" href="index.html">
                      <span class="nav-text">Berita</span>
                    </a>
                  </li>
                  <li  class="" >
                    <a class="sidenav-item-link" href="{{ route('categories.index')}}">
                      <span class="nav-text">Kategori</span>
                    </a>
                  </li>
                  <li  class="" >
                    <a class="sidenav-item-link" href="index.html">
                      <span class="nav-text">Tag</span>
                    </a>
                  </li>
                </div>
              </ul>
            </li>
        </ul>
      </div>
      <hr class="separator" />

      <div class="sidebar-footer">
        <div class="sidebar-footer-content">
        <p>
          &copy; <span id="copy-year"></span> Copyright Sleek Dashboard Bootstrap Template by <a class="text-primary" href="http://www.iamabdus.com/" target="_blank">Abdus</a>.
        </p>
        </div>
      </div>
    </div>
  </aside>