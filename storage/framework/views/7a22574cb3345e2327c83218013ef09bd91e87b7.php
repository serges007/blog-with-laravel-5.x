<li id="comment-1">
    <div class="comment-wrap">
        <div class="author-avatar pull-left">
            <!--       Ici l'image de l'utilisateur-->
            <img src="<?php echo e(asset('img/blog/user.jpg')); ?>" alt="">
        </div>
        <div class="author-comment">
            <cite class="pull-left"><a href="#"><?php echo e($comment->user->name); ?></a></cite>
            <div style="clear:both"></div>
            <div class="comment-meta">
                <i class="fa fa-calendar"></i><?php echo e($comment->created_at->format('d/m/Y')); ?>

            </div>
        </div>
        <div class="comment-content">
            <p><?php echo e($comment->content); ?></p>
        </div>
    </div>
</li>