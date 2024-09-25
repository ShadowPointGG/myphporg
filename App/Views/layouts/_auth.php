<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
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

<body class="bg-gradient-primary" style="background: rgb(0,0,0);">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-12 col-xl-10">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-flex">
                            <div class="flex-grow-1 bg-login-image" style="background: url('/img/Login_Background.png') center / contain;"></div>
                        </div>
                        <div class="col-lg-6">
                            <?php include $view_file?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../../../public/bootstrap/js/bootstrap.min.js"></script>
<script src="../../../public/js/bs-init.js"></script>
<script src="../../../public/js/theme.js"></script>
</body>

</html>