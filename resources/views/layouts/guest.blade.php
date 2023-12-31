<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- base url -->
    <base href="<?php echo env('APP_URL'); ?>/">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Title -->
    <title><?php echo env('APP_NAME'); ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <?php if(env('APP_ENV') == 'local'): ?>
        <link rel="stylesheet" href="<?php echo env('APP_URL'); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo env('APP_URL'); ?>/css/styles.css">
    <?php else: ?>
    <link rel="stylesheet" href="<?php echo env('APP_URL'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo env('APP_URL'); ?>/css/styles.css">
    <?php endif; ?>
</head>
<body>
<div class="website">
    <div class="header-hold">
        @include('templates.header')
    </div>
    <div class="content-hold">
        @yield('content')
    </div>
    <div class="footer-hold">      
        @include('templates.footer')
    </div>
</div>

<!-- Scripts -->
<script src="<?php echo env('APP_URL'); ?>/js/jquery.js"></script>
<script src="<?php echo env('APP_URL'); ?>/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo env('APP_URL'); ?>/js/scripts.js"></script>
</body>
</html>