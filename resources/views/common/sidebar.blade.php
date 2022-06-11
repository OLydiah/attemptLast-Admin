<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
        <div class="sidebar-brand-text mx-3">
            <img style="width:100%; height: 25%; margin: 0 !important;" src="{{asset('img/llogo.png')}}"></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0" style=" margun-top:65px;">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active"  style=" margun-top:15px;">
        <a class="nav-link" href="/home">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Configuration</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white collapse-inner">
                <a class="collapse-item" href="{{ route('general.index') }}">General Settings</a>
            </div>
        </div>
    </li> -->
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdmin"
            aria-expanded="true" aria-controls="collapseAdmin">
            <i class="fas fa-fw fa-laptop"></i>
            <span>Administration</span>
        </a>
        <div id="collapseAdmin" class="collapse" aria-labelledby="headingAdmin"
            data-parent="#accordionSidebar">
            <div class="bg-white collapse-inner">
                <a class="collapse-item" href="{{ route('uadmin.index') }}">Profile</a>
                <a class="collapse-item" href=" ">Manage Profile</a>
            </div>
        </div>
    </li>
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePos"
            aria-expanded="true" aria-controls="collapsePos">
            <i class="fas fa-fw fa-print"></i>
            <span>Point of Sale</span>
        </a>
        <div id="collapsePos" class="collapse" aria-labelledby="headingPos"
            data-parent="#accordionSidebar">
            <div class="bg-white collapse-inner">
                <a class="collapse-item" href="{{ route('posale.index') }}">Sales</a>
                <a class="collapse-item" href=" ">Other</a>
            </div>
        </div>
    </li>
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReport"
            aria-expanded="true" aria-controls="collapseReport">
            <i class="fas fa-fw fa-file"></i>
            <span>Reports</span>
        </a>
        <div id="collapseReport" class="collapse" aria-labelledby="headingReports"
            data-parent="#accordionSidebar">
            <div class="bg-white collapse-inner">
                <a class="collapse-item" href="{{ route('reports.index') }}">Sales Report</a>
                <a class="collapse-item" href="">Other</a>
            </div>
        </div>
    </li>

</ul>