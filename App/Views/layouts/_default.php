<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $config['app']['app_name'] . ' - ' . $this->title; ?></title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <script src="/js/main.js"></script>
    <meta name="theme-color" content="#919191">
    <link rel="icon" type="image/png" sizes="1500x1500" href="/img/Icon.png">
    <link rel="icon" type="image/png" sizes="1500x1500" href="/img/Icon.png" media="(prefers-color-scheme: dark)">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/Nunito.css">
    <link rel="stylesheet" href="/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/fonts/fontawesome5-overrides.min.css">
</head>
<body>
<div class="wrapper row">
    <div class="col-md-2">
        <nav class="navbar align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0 navbar-dark" style="background: rgb(98,98,98);" data-bs-target="#accordionSidebar" data-bs-smooth-scroll="true">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#"><img class="img-fluid" src="/img/Icon.png" style="margin-right: 0px;padding-right: 0px;padding-left: 0px;" width="79" height="79">
                    <div class="sidebar-brand-icon rotate-n-15"></div>
                    <div class="sidebar-brand-text mx-3"></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="Home.html"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="Profile.html"><i class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item">
                        <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown"><i class="fa fa-cogs"></i><span>Admin</span></a>
                            <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="Admin.html"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Admin Dashboard</a><a class="dropdown-item" href="Members.html"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;User Admin</a><a class="dropdown-item"><i class="fas fa-project-diagram fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Project Admin</a><a class="dropdown-item" href="AdminTask.html"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>Task Admin</a><a class="dropdown-item" href="Contracts.html"><i class="fas fa-file-alt fa-sm fa-fw me-2 text-gray-400" style="font-size: 12px;"></i>Contract Admin</a><a class="dropdown-item" href="AdminActivityLog.html"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-64 0 512 512" width="1em" height="1em" fill="currentColor" class="fa-sm fa-fw me-2 text-gray-400" style="font-size: 12px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M320 64h-49.61C262.1 27.48 230.7 0 192 0S121 27.48 113.6 64H64C28.65 64 0 92.66 0 128v320c0 35.34 28.65 64 64 64h256c35.35 0 64-28.66 64-64V128C384 92.66 355.3 64 320 64zM192 48c13.23 0 24 10.77 24 24S205.2 96 192 96S168 85.23 168 72S178.8 48 192 48zM336 448c0 8.82-7.178 16-16 16H64c-8.822 0-16-7.18-16-16V128c0-8.82 7.178-16 16-16h18.26C80.93 117.1 80 122.4 80 128v16C80 152.8 87.16 160 96 160h192c8.836 0 16-7.164 16-16V128c0-5.559-.9316-10.86-2.264-16H320c8.822 0 16 7.18 16 16V448z"></path>
                                    </svg>System Logs</a></div>
                        </div><a class="nav-link" href="Tasks.html"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-list-task">
                                <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"></path>
                                <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"></path>
                                <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"></path>
                            </svg><span>&nbsp;Tasks</span></a>
                    </li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="Login.html"><i class="far fa-user-circle"></i><span>Login</span></a></li>
                </ul>
                <ul class="navbar-nav flex-nowrap ms-auto">
                    <li class="nav-item dropdown no-arrow"></li>
                </ul><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
                <div class="text-center d-none d-md-inline"></div>
            </div>
        </nav>
    </div>
    <div class="col-md-9">
        <div class="container container-padding">
            <?php include $view_file ?>
        </div>
    </div>

    <footer>
        <div class="copyrights"><br>
            <p>&copy; 2022 - <?= date('Y') ?> Shadow Point GG - Registered as a LLC in Maryland, US under Company Number: W18972869.<br>This information can be verified at <a href="https://opencorporates.com/companies/us_md/W18972869">open corporates</a></p>
        </div>
    </footer>
</div>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/js/chart.min.js"></script>
<script src="/js/bs-init.js"></script>
<script src="/js/theme.js"></script>
</body>
</html>
