

<div class="row">
    
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <?php if($post['column'] === 1): ?>
            <?php 
                $col_class = "col-lg-12";
             ?>
        <?php elseif($post['column'] === 2): ?>
            <?php 
                $col_class = "col-lg-6";
             ?>
        <?php endif; ?>

             
            <div class="<?php echo e($col_class); ?>">
                <?php echo $__env->make('yasna.blog-posts.list-view.post',[
                    'post_link'=>$post['post_link'],
                    'thumbnail_img'=> $post['thumbnail-img'],
                    'category'=> $post['category'],
                    'category_link'=> $post['category-link'],
                    'title'=> $post['title'],
                    'abstract'=> $post['abstract'],
                    'author_img'=> $post['author_img'],
                    'author_name'=> $post['author-name'],
                    'date'=> $post['date']
                ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    

</div>