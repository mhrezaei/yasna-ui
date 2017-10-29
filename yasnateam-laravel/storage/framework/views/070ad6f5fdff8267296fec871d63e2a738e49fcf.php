

<main>
    <div class="container">
        
        <?php echo $__env->make('yasna.blog-posts.posts.blog-list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
</main>