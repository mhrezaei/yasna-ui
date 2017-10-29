


<nav class="nav-tab">
    <ul class="container clearfix">
        <?php $__currentLoopData = $navbar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="subnav">
                <a href="<?php echo e(isset($item['href']) ? $item['href'] : "#"); ?>"><?php echo e(isset($item['title']) ? $item['title'] : ""); ?></a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ul>
</nav>


<nav class="select-nav is-hidden">
    <select class="select-subnav">
        <?php $__currentLoopData = $navbar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e(isset($item['title']) ? $item['title'] : ""); ?>" data-href="<?php echo e(isset($item['href']) ? $item['href'] : "#"); ?>" ><?php echo e(isset($item['title']) ? $item['title'] : ""); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</nav>