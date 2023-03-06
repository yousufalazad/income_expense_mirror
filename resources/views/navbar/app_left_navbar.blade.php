<div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 left_nav">
    <!-- <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-5 d-none d-sm-inline">Menu</span>
    </a> -->

    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start text-white" id="menu">
        
        <li>
            <a href="{{ url('dashboard') }}" class="nav-link px-0 align-middle">
                <i class=""></i> <span class="ms-1 d-none d-sm-inline">My Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ url('income-expense-report') }}" class="nav-link px-0 align-middle">
                <i class="fa-solid fa-gauge"></i> <span class="ms-1 d-none d-sm-inline">Report</span>
            </a>
        </li>
        <br>
        
        <li>
            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                <i class="fa-solid fa-bars"></i>
                <span class="ms-1 d-none d-sm-inline">INCOME</span>
                <i class="fa-solid fa-angle-down pl-5"></i>
            </a>
            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu1">
                <li class="w-100">
                    <a href="{{ url('monthly-fixed-income') }}" class="nav-link px-0"> <i class="fa-solid fa-layer-group"></i> <span class="d-none d-sm-inline">Monthly</span></a>
                </li>
                <li>
                    <a href="{{ url('quarterly-fixed-income') }}" class="nav-link px-0"> <i class="fa-solid fa-layer-group"></i> <span class="d-none d-sm-inline">Quarterly</span></a>
                </li>
                <li>
                    <a href="{{ url('half-yearly-fixed-income') }}" class="nav-link px-0"> <i class="fa-solid fa-layer-group"></i> <span class="d-none d-sm-inline">Half Yearly</span></a>
                </li>
                <li>
                    <a href="{{ url('yearly-fixed-income') }}" class="nav-link px-0"> <i class="fa-solid fa-layer-group"></i> <span class="d-none d-sm-inline">Yearly</span></a>
                </li>
                <li>
                    <a href="{{ url('one-time-income') }}" class="nav-link px-0"> <i class="fa-solid fa-layer-group"></i> <span class="d-none d-sm-inline">One Time Income</span></a>
                </li>
            </ul>
        </li>
        <br>
        <li>
            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                <i class="fa-solid fa-bars"></i>
                <span class="ms-1 d-none d-sm-inline">EXPENSES</span>
                <i class="fa-solid fa-angle-down pl-5"></i>
            </a>
            <ul class="collapse show nav flex-column ms-1" id="submenu2" data-bs-parent="#menu2">
                <li class="w-100">
                    <a href="{{ url('monthly-fixed-expense') }}" class="nav-link px-0"> <i class="fa-solid fa-layer-group"></i> <span class="d-none d-sm-inline">Monthly</span></a>
                </li>
                <li>
                    <a href="{{ url('quarterly-fixed-expense') }}" class="nav-link px-0"> <i class="fa-solid fa-layer-group"></i> <span class="d-none d-sm-inline">Quarterly</span></a>
                </li>
                <li>
                    <a href="{{ url('half-yearly-fixed-expense') }}" class="nav-link px-0"> <i class="fa-solid fa-layer-group"></i> <span class="d-none d-sm-inline">Half Yearly</span></a>
                </li>
                <li>
                    <a href="{{ url('yearly-fixed-expense') }}" class="nav-link px-0"> <i class="fa-solid fa-layer-group"></i> <span class="d-none d-sm-inline">Yearly</span></a>
                </li>
                <li>
                    <a href="{{ url('one-time-expense') }}" class="nav-link px-0"> <i class="fa-solid fa-layer-group"></i> <span class="d-none d-sm-inline">One Time Expenses</span></a>
                </li>
            </ul>
        </li>

        
    </ul>
    
    <!-- <div class="dropdown pb-4">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
            <span class="d-none d-sm-inline mx-1">loser</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div> -->
</div>
