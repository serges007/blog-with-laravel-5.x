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
                            <?php if($result): ?>    
                                <div class="row">
                                        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div >
                                                <?php echo $__env->make('blog.partials.items', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                 

                                </div>
                            <?php endif; ?>
                            <?php if(empty($result)): ?>
                                <p>No articles</p>
                            <?php endif; ?>
                            <?php echo e($result->links()); ?>

                            <!-- /single blog post -->                            
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