<article class="col-md-3 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-duration="500ms">
        <div class="note">
                <div class="media-wrapper">
                    <a href="<?php echo e(URL::route('blog.show', $article->slug)); ?>">
                        <img src="<?php echo e(url('images',$article->image->url)); ?>" alt="<?php echo e($article->slug); ?> image." class="img-responsive">                        
                    </a>
                </div>

                <div class="excerpt">
                        <h3><?php echo e(str_limit($article->title , $limit = 30, $end = "...")); ?></h3>
                        <p><?php echo e(str_limit($article->content, $limit = 30, $end = "...")); ?></p>
                        <a class="btn btn-transparent" href="<?php echo e(URL::route('blog.show', $article->slug)); ?>">Read more</a>
                </div>
        </div>						
</article>