<ul class="social">

    <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <?php echo $__env->make('yasna.social-link',[
                "link"=>$link['link'],
                "class"=>$link['font-o']
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</ul>