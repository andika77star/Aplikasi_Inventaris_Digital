
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">

            <ul class="nav nav-primary">
                <li class="nav-item {{ (request()->segment(1) == 'dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Components</h4>
                </li>
                <li class="nav-item {{ (request()->segment(1) == 'unit') ? 'active' : '' }}">
                    <a href="{{ route('unit') }}">
                        <i class="fas fa-bars"></i>
                        <p>table</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="">
                        <i class="fas fa-user"></i>
                        <p>User</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>



