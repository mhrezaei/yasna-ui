

<div class="slide-owl mobile-scroll">
    <img src="<?php echo e($slide['src']); ?>" alt="<?php echo e($slide['alt']); ?>">
    <div class="btn-wrapper">
        <button class="circle pulse-btn"><i class="fa fa-plus" aria-hidden="true"></i></button>
        <div class="popup pop-msg">
            <div class="popup-content light-bg">
                <h1 class="cap-heading pop-heading"><?php echo e($slide['title']); ?></h1>
                <p class="cap-p"><?php echo e($slide['description']); ?></p>
                <a class="pop-link" href="<?php echo e($slide['href']); ?>"><?php echo e(trans('yasna.template.read_more')); ?></a>
            </div>
        </div>
    </div>
</div>