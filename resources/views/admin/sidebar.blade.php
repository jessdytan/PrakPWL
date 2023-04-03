    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="/admin/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Main Menu
        </div>

        <!-- Nav Item - Posts -->
        <li class="nav-item {{ request()->is('admin/postingan')?'active':' ' }}">
            <a class="nav-link" href="/admin/postingan">
                <i class="fas fa-fw fa-folder"></i>
                <span>Semua Postingan</span></a>
        </li>

        <!-- Nav Item - Archieve -->
        <li class="nav-item {{ request()->is('admin/arsip') ? 'active' : '' }}">
            <a class="nav-link" href="/admin/arsip">
                <i class="fas fa-fw fa-archive"></i>
                <span>Arsip</span></a>
        </li>

        <!-- Nav Item - Invoice -->
        <li class="nav-item {{ request()->is('admin/invoice') ? 'active' : '' }}">
            <a class="nav-link" href="/admin/invoice">
                <i class="fas fa-fw fa-file-invoice"></i>
                <span>Invoice</span></a>
        </li>

        <!-- Nav Item - Review -->
        <li class="nav-item {{ request()->is('admin/review') ? 'active' : '' }}">
            <a class="nav-link" href="/admin/review">
                <i class="fas fa-fw fa-comment-dots"></i>
                <span>Review</span></a>
        </li>

        <!-- Nav Item - Teams -->
        <li class="nav-item {{ request()->is('admin/teams') ? 'active' : '' }}">
            <a class="nav-link" href="/admin/teams">
                <i class="fas fa-fw fa-users"></i>
                <span>Teams</span></a>
        </li>

        <!-- Nav Item - Settings -->
        <li class="nav-item {{ request()->is('admin/settings') ? 'active' : '' }}">
            <a class="nav-link" href="/admin/settings">
                <i class="fas fa-fw fa-tools"></i>
                <span>Settings</span></a>
        </li>

        <!-- Nav Item - Settings -->
        <li class="nav-item {{ request()->is('admin/logout') ? 'active' : '' }}">
            <a class="nav-link" href="/admin/logout">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Logout</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->