

<div class="post">
    <a href="<?php echo e(isset($post_link) ? $post_link : ""); ?>">
        <div class="thumbnail-img">
            
            <?php echo $__env->make('yasna.frame.widgets.image',[
                'src'=>$thumbnail_img,
                'alt'=>""
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        
        <div class="post-details">
            
            <h4 data-category="<?php echo e(isset($category) ? $category : ""); ?>" class="eyebrow category">
                <a href="<?php echo e(isset($category_link) ? $category_link : "#"); ?>"><?php echo e(isset($category) ? $category : ""); ?></a>
            </h4>
            
            <h3><?php echo e(isset($title) ? $title : ""); ?></h3>
            
            <p>
                <?php echo e(isset($abstract) ? $abstract : ""); ?>

            </p>

            <div class="posts-publication-meta">
                
                <?php echo $__env->make('yasna.frame.widgets.image',[
                    'class'=>"post-author",
                    'src'=>$author_img,
                    'alt'=>''
                ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                
                <div class="post-info">
                    <p class="author-name"><?php echo e(isset($author_name) ? $author_name : ""); ?></p>
                    <p class="date"><?php echo e(isset($date) ? $date : ""); ?></p>
                </div>
            </div>


        </div>
    </a>
</div>
