

<main>
    <div class="container">
        
        <?php echo $__env->make('yasna.blog-posts.frame.posts.blog-post-title', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        
        <?php echo $__env->yieldContent('blog-content'); ?>
    </div>
</main>