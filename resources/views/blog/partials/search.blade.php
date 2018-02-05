@extends('layouts.layout')

@section('title', 'article')

@section('content')
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
                            @if($result)    
                                <div class="row">
                                        @foreach($result as $article)
                                            <div >
                                                @include('blog.partials.items')
                                            </div>
                                        @endforeach                                 

                                </div>
                            @endif
                            @empty($result)
                                <p>No articles</p>
                            @endempty
                            {{$result->links()}}
                            <!-- /single blog post -->                            
                        </div>
                    </div>
                    
                    <!-- Widget Section -->
                    @include('blog.partials.sliderbar')
                    <!-- End Widget Section -->

                </div>	    <!-- End row -->
            </div>       <!-- End container -->
	</section>    <!-- End Section -->
@stop
