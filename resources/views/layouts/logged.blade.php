<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- base url -->
    <base href="<?php echo e(URL::to('/')); ?>/">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Title -->
    <title><?php echo env('APP_NAME'); ?></title>
</head>
<body>
<div class="website">
    <div class="header-hold">

    </div>
    <div class="content-hold">
        @yield('content')
    </div>
    <div class="footer-hold">
        
    </div>
</div>
</body>
</html>