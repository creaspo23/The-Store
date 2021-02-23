<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
    <script src="<?php echo e(mix('js/app.js')); ?>" defer></script>
</head>
<body class="bg-gray-200 min-h-screen font-base" dir="rtl">
<?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>
<div id="app" data-page="<?php echo e(json_encode($page)); ?>"></div>
</body>
</html>
<?php /**PATH /home/creaspo/Desktop/store-1451a24e2348adbcb6260810acc1bd3f02a0c21c/resources/views/app.blade.php ENDPATH**/ ?>