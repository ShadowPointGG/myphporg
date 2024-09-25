<nav class="navbar align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0 navbar-dark" style="background: rgb(98,98,98);" data-bs-target="#accordionSidebar" data-bs-smooth-scroll="true">
    <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#"><img class="img-fluid" src="/img/Icon.png" style="margin-right: 0px;padding-right: 0px;padding-left: 0px;" width="79" height="79">
            <div class="sidebar-brand-icon rotate-n-15"></div>
            <div class="sidebar-brand-text mx-3"></div>
        </a>
        <hr class="sidebar-divider my-0">
        <ul class="navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item"><a class="nav-link" href="/"><i class="bi-house-fill"></i><span>Dashboard</span></a></li>
            <li class="nav-item"><a class="nav-link" href="/me"><i class="bi-person-circle"></i><span>Profile</span></a></li>
            <li class="nav-item">
                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown"><i class="bi-gear-fill"></i><span>Admin</span></a>
                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                        <a class="dropdown-item" href="#"><i class="bi-code-slash"></i> Admin Dashboard</a>
                        <a class="dropdown-item" href="/users"><i class="bi-person-fill"></i> User Admin</a>
                        <a class="dropdown-item" href="#"><i class="bi-kanban-fill"></i> Project Admin</a>
                        <a class="dropdown-item" href="#"><i class="bi-archive-fill"></i> Task Admin</a>
                        <a class="dropdown-item" href="#"><i class="bi-file-earmark-text"></i></i> Contract Admin</a>
                        <a class="dropdown-item" href="#"><i class="bi-archive-fill"></i> System Logs</a>
                    </div>
                </div><a class="nav-link" href="#"><i class="bi-list-task"></i><span>&nbsp;Tasks</span></a>
            </li>
            <hr>
            <?php if(!isset($_SESSION['user'])){?>
                <li class="nav-item"><a class="nav-link" href="/login"><i class="bi-box-arrow-in-right"></i><span>Login</span></a></li>
            <?php }else{?>
                <li class="nav-item"><a class="nav-link" href="/logout"><i class="bi-box-arrow-in-left"></i><span>Logout</span></a></li>
            <?php }?>
        </ul>
<!--        <ul class="navbar-nav flex-nowrap ms-auto">-->
<!--            <li class="nav-item dropdown no-arrow"></li>-->
<!--        </ul><button class="btn rounded-circle border-0 bi-chevron-left" id="sidebarToggle" type="button"></button>-->
<!--        <div class="text-center d-none d-md-inline"></div>-->
    </div>
</nav>