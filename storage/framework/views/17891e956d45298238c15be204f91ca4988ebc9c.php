<!-- Widget Section -->
<div id="right-sidebar" class="col-md-4 col-sm-4">

   <!-- Single Widget -->
    <aside class="widget wow fadeInUp"  data-wow-duration="1000ms">
        <div class="widget-title">
           <h3>Search</h3>
        </div>
       <div class="widget-content">
           <?php echo e(Form::open(['route' => ['search'], 'method' => 'POST'])); ?>

                <?php echo e(Form::text('search', '',['class' => 'form-control','placeholder' => 'Search'])); ?>

                <?php if(Session::has('errors')): ?>
                    <span class="help-block"><?php echo e(errors); ?></span>
                <?php endif; ?>                                                                
<!--                <button type="submit" title="Search" id="search-submit"><i class="fa fa-search"></i></button>-->
                <?php echo e(Form::submit('', ['id' => 'search-submit','class' => 'fa fa-search'])); ?>

           <?php echo e(Form::close()); ?>

       </div>
    </aside>
    <!-- End Single Widget -->

   <!-- Single Widget -->
    <aside class="widget wow fadeInDown">
        <div class="widget-title">
                <h3>Ta Widget</h3>
        </div>

        <div class="widget-content">
                <!-- tab nav -->
                <ul class="tab-post-nav clearfix">
                        <li class="active"><a href="#popular" data-toggle="tab">Recent Post</a></li>

                </ul>
                <!-- /tab nav -->

                <!-- tab content -->
                <div class="tab-content">
                        <article class="tab-pane active tab-post" id="popular">
                                <?php if($articles): ?>    
                                    <div class="row">
                                        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="clearfix">
                                                <div class="tab-thumb">
                                                    <img src="<?php echo e(url('images',$article->image->url)); ?>" alt="<?php echo e($article->slug); ?> image." class="img-responsive">
                                                </div>
                                                <div class="tab-excerpt">
                                                    <h4><a href="<?php echo e(URL::route('blog.show', $article->slug)); ?>"><?php echo e(str_limit($article->title , $limit = 30, $end = "...")); ?></a></h4>
                                                    <span><?php echo e($article->created_at->format('d/m/Y')); ?></span>
                                                    <p><?php echo e(str_limit($article->title , $limit = 30, $end = "...")); ?></p>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>                            
                                <?php else: ?>
                                    <p>No articles</p>
                                <?php endif; ?>                             
                        </article>
                </div>
                <!-- /tab content -->

        </div>
    </aside>
    <!-- End Single Widget -->

   <!-- Single Widget -->
    <aside class="widget wow fadeInDown">
        <div class="widget-title">
           <h3>Newsletter</h3>
           <p>Signup to receive email updates and to hear what's going on with my blog!</p>
        </div>
        <div class="widget-content">
           <?php echo e(Form::open(['route' => ['newsletter'], 'method' => 'POST'])); ?>

                <?php echo e(Form::text('email', '',['class' => 'form-control','placeholder' => 'Enter your email'])); ?>

                <?php if(Session::has('errors')): ?>
                    <span class="help-block"><?php echo e(errors); ?></span>
                <?php endif; ?>                                                                
                <?php echo e(Form::submit('Subscribe', ['class' => 'btn btn-transparent'])); ?>

           <?php echo e(Form::close()); ?>            
        </div>
    </aside>
    <!-- End Single Widget -->

   <!-- Single Widget -->
    <aside class="widget wow fadeInDown">
        <div class="widget-title">
           <h3>Categories</h3>
        </div>
        <div class="widget-content">
            <ul class="categories">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><i class="fa fa-plus"></i> <a href="<?php echo e(URL::route('list.articles', $categorie->id)); ?>"><?php echo e($categorie->name); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </aside>
    <!-- End Single Widget -->
</div>
