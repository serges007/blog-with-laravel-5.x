@extends('layouts.layout')

@section('title', 'articles')

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
    <section id="blog-page">
        <div class="container">
            <div class="row">
                <!--
                Start Blog Section
                =========================================== -->
                <!-- ssection title -->

                <div class="clearfix">
                    <!-- single blog post -->
                    @if($articles)    
                        <div class="row">
                                @foreach($articles as $article)
                                    <div >
                                        @include('blog.partials.item')
                                    </div>           
                                @endforeach
                        </div>                            
                    @else
                        <p>No articles</p>
                    @endif 
                    {{$articles->links()}}
                    <!-- /single blog post -->
                </div>
            </div>
        </div>
    </section>    
@stop