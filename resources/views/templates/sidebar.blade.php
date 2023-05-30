  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="/admin">
          <i class="bi bi-menu-button-wide"></i><span>Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            @if (auth()->user()->role == 1)
            <li>
                <a href="/admin">
                <i class="bi bi-circle"></i><span>Data Admin</span>
                </a>
            </li>
            @endif
          <li>
            <a href="/pegawai">
              <i class="bi bi-circle"></i><span>Data Pegawai</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

        <form action="/auth/logout" method="POST">
            @csrf
            <li class="nav-item">
                <button class="nav-link collapsed" onclick="return confirm('Ready to Leave?');">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Logout</span>
                </button>
            </li>
        </form>
      <!-- End Login Page Nav -->
    </ul>

  </aside>
  <!-- End Sidebar-->
