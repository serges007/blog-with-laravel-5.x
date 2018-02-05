<?php $__env->startSection('title', 'article'); ?>

<?php $__env->startSection('content'); ?>
    <section id="blog-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">

                    <div class="blog-icon">
                        <i class="fa fa-book fa-4x"></i>
                    </div>
                    <div class="blog-title">
                        <h1>Welcome to Our Blog</h1>
                    </div>

                </div>     <!-- End col-lg-12 -->
            </div>	    <!-- End row -->
        </div>       <!-- End container -->
    </section>    <!-- End Section -->

        <!-- Start Blog Post Section
        ==================================== -->
        <section id="blog-page">
            <div class="container">
                <div class="row">
                    <div id="blog-posts" class="col-md-8 col-sm-8">
                        <div class="post-item">
                           
                           <!-- Single Post -->
                            <article class="entry wow fadeInDown"  data-wow-duration="1000ms" data-wow-delay="300ms">                               
                                <div class="post-thumb">
                                    <a href="#">
                                        <img src="<?php echo e(url('images',$article->image->url)); ?>" class="img-responsive">
                                    </a>
                                </div>
                                <div class="post-excerpt">
                                    <?php echo e($article->content); ?>

                                </div>
                                <div class="post-meta">
                                        <span class="post-date">
                                                <i class="fa fa-calendar"></i><?php echo e($article->created_at->format('d/m/Y')); ?>

                                        </span>
                                        <span class="comments">
                                                <i class="fa fa-comments"></i><?php echo e($article->comments->count()); ?>

                                        </span>
                                        <span class="post-tags">
                                                <i class="fa fa-tags"></i><a href="#">Web Design</a>, <a href="#">Development</a>
                                        </span>
                                </div>
                            </article>
                            <!-- End Single Post -->
							
                            <div class="next-prev clearfix">
                                <a href="<?php echo e(url('/blog')); ?>" class="prev-post">
                                    <i class="fa fa-angle-left fa-2x"></i>Previous Post
                                </a>
                            </div>
                            
                            <div id="comments" class="comments-section">
                                <h4><?php echo e($article->comments->count()); ?> Comments</h4>
                                <ol class="comment-list">
                                    <?php $__currentLoopData = $article->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo $__env->make('blog.partials.comments', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                        
                                </ol>
                            </div>
                            
                            <div class="comment-reply-form">
                               <h3>Leave a Replay</h3>
                                <?php if(Auth::check()): ?>
                                    <div class="comment-box mt-70 clearfix wow fadeInUp animated"  data-wow-delay=".4s">

                                        <div>
                                            <?php echo e(Form::open(['route' => ['comments.create', $article->id], 'method' => 'POST'])); ?>

                                            <div class="form-group">
                                                <?php echo e(Form::textarea('comment', '',['class' => 'form-control','placeholder' => 'Your comment ', 'rows' =>'5','cols' =>'5'])); ?>

                                                <?php if(Session::has('errors')): ?>
                                                    <span class="help-block"><?php echo e(errors); ?></span>
                                                <?php endif; ?>                                                
                                            </div>
                                            <div class="form-group">
                                                <?php echo e(Form::submit('Post Comment', ['class' => 'btn btn-transparent'])); ?>

                                            </div>                                            
                                            <?php echo e(Form::close()); ?>

                                        </div>
                                    </div>    
                                <?php else: ?>
                                    <div class='col-lg-offset-1'>Pour poster un commentaire <a href="<?php echo e(URL::route('login')); ?>">connectez vous</a></div>
                                <?php endif; ?>                               
                            </div>
                            <!-- End Single Post -->
                        </div>
                    </div>
                    
                    <!-- Widget Section -->
                    <?php echo $__env->make('blog.partials.sliderbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <!-- End Widget Section -->

                </div>	    <!-- End row -->
            </div>       <!-- End container -->
	</section>    <!-- End Section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>