

<!DOCTYPE html>

<html lang="<?php echo e(getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <?php echo $__env->yieldContent('header_meta'); ?>

    <title><?php echo $__env->yieldContent('page_title'); ?></title>

    <?php echo $__env->yieldContent('header_assets'); ?>

</head>
<body>

    <?php echo $__env->yieldContent('body'); ?>

    <?php echo $__env->yieldContent('footer_assets'); ?>

</body>
</html>

