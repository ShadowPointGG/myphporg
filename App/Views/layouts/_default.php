<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $config['app']['app_name'] . ' - ' . $this->title; ?></title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <meta name="theme-color" content="#919191">
    <link rel="icon" type="image/png" sizes="1500x1500" href="/img/Icon.png">
    <link rel="icon" type="image/png" sizes="1500x1500" href="/img/Icon.png" media="(prefers-color-scheme: dark)">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/Nunito.css">
    <link rel="stylesheet" href="/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/fonts/fontawesome5-overrides.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body class="d-flex flex-column">
<div class="wrapper row">
    <div class="col-md-2 ">
        <?php include('_navigation_.php'); ?>
    </div>
    <div class="col-md-9">
        <div class="container container-padding">
            <?php
            include $view_file ?>
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
<script src="/js/main.js"></script>
</body>
</html>
