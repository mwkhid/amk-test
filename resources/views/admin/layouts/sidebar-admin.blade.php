<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard.admin') }}">

        <div class="sidebar-brand-text mx-3">PAGE ADMIN</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard.admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Customer -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('customers.index') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Customer</span></a>
    </li>

    <!-- Nav Item - Item -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('items.index') }}">
            <i class="fas fa-fw fa-bars"></i>
            <span>Item</span></a>
    </li>

    <!-- Nav Item - Pmbelian -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('orders.index') }}">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Pembelian</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav-Item - User-Management -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('user-management.index') }}">
            <i class="fas fa-fw fa-user-circle"></i>
            <span>User Management</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->
