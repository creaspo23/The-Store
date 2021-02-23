<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
    <script src="<?php echo e(mix('js/app.js')); ?>" defer></script>
</head>
<body class="bg-gray-200 min-h-screen font-base">
<div id="no-app">
    <?php echo $__env->yieldContent('content'); ?>
</div>
</body>
</html>
<?php /**PATH /home/creaspo/Desktop/store-1451a24e2348adbcb6260810acc1bd3f02a0c21c/resources/views/layouts/auth.blade.php ENDPATH**/ ?>