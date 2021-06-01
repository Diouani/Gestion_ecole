<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item2">
            <a class="nav-link" href="<?php echo URLROOT; ?>/teachers/show" style="color: black;">
                <i class="fa fa-chalkboard-teacher fa-1x text-dark mr-3" aria-hidden="true"></i>
                <span class="menu-title">Teachers</span>
                <i class="menu-arrow"></i>
            </a>
        </li>




        <li class="nav-item2" id="test">
            <a class="nav-link" href="<?php echo URLROOT; ?>/students/show" style="color: black;">
                <i class="fa fa-user-graduate fa-1x text-dark mr-4" aria-hidden="true"></i>
                <span class="menu-title">Students</span>
                <i class="menu-arrow"></i>
            </a>
        </li>


        <li class="nav-item2">
            <a class="nav-link" data-toggle="collapse" href="<?php echo URLROOT; ?>/parents/show" style="color: black;">
                <i class="fa fa-user-tie fa-1x text-dark mr-4" aria-hidden="true"></i>
                <span class="menu-title">Parents</span>
                <i class="menu-arrow"></i>
            </a>

        </li>


    </ul>
</nav>