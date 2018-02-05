<?php $__env->startSection('title', 'articles'); ?>

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
    <section id="blog-page">
        <div class="container">
            <div class="row">
                <!--
                Start Blog Section
                =========================================== -->
                <!-- ssection title -->

                <div class="clearfix">
                    <!-- single blog post -->
                    <?php if($articles): ?>    
                        <div class="row">
                                <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div >
                                        <?php echo $__env->make('blog.partials.item', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    </div>           
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>                            
                    <?php else: ?>
                        <p>No articles</p>
                    <?php endif; ?> 
                    <?php echo e($articles->links()); ?>

                    <!-- /single blog post -->
                </div>
            </div>
        </div>
    </section>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>