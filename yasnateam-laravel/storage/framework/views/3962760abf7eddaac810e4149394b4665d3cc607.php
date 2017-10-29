<h4 class="list-title logo-footer">
    <?php echo e(trans('yasna.template.yasna_group')); ?>

</h4>
<ul class="contact-info">
    <li class="info">
        <span class="info-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
       <?php echo e($address); ?>

    </li>
    <li class="info">
        <span class="info-icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
        <?php echo e($phone); ?>

    </li>
    <li class="info">
        <span class="info-icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
        <a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a>

    </li>
</ul>