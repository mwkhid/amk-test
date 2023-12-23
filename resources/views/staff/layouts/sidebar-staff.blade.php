<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('staff.dashboard') }}">
        <div class="sidebar-brand-icon">
            {{-- <img src="{{ url('inc/img/undraw_profile.svg') }}" alt=""> --}}
            {{-- <i class="fas fa-laugh-wink"></i> --}}
        </div>
        <div class="sidebar-brand-text mx-3">AYO MENEBAR KEBAIKAN</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('staff.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">



    <!-- Nav Item - Customer -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('staff.customer') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Customer</span></a>
    </li>

    <!-- Nav Item - Item -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('staff.item') }}">
            <i class="fas fa-fw fa-bars"></i>
            <span>Item</span></a>
    </li>

    <!-- Nav Item - Pmbelian -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('staff.order') }}">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Pembelian</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->
