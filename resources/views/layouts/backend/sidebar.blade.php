<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html"> <img alt="image" src="{{ asset('assets/backend/img/dispar.png') }}" class="header-logo" /> <span
            class="logo-name">Dispar</span>
        </a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown">
          <a href="index.html" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>
        <li class="dropdown">
          <a href="{{ route('category.index') }}" class="nav-link"><i data-feather="edit"></i><span>Category</span></a>
        </li>
        <li class="dropdown">
          <a href="{{ route('video.index') }}" class="nav-link"><i data-feather="play-circle"></i><span>Manage Video</span></a>
        </li>
        
      </ul>
    </aside>
</div>