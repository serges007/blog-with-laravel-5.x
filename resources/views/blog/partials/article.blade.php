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
                           
                           <!-- Single Post -->
                            <article class="entry wow fadeInDown"  data-wow-duration="1000ms" data-wow-delay="300ms">                               
                                <div class="post-thumb">
                                    <a href="#">
                                        <img src="{{url('images',$article->image->url)}}" class="img-responsive">
                                    </a>
                                </div>
                                <div class="post-excerpt">
                                    {{$article->content}}
                                </div>
                                <div class="post-meta">
                                        <span class="post-date">
                                                <i class="fa fa-calendar"></i>{{ $article->created_at->format('d/m/Y') }}
                                        </span>
                                        <span class="comments">
                                                <i class="fa fa-comments"></i>{{ $article->comments->count() }}
                                        </span>
                                        <span class="post-tags">
                                                <i class="fa fa-tags"></i><a href="#">Web Design</a>, <a href="#">Development</a>
                                        </span>
                                </div>
                            </article>
                            <!-- End Single Post -->
							
                            <div class="next-prev clearfix">
                                <a href="{{ url('/blog') }}" class="prev-post">
                                    <i class="fa fa-angle-left fa-2x"></i>Previous Post
                                </a>
                            </div>
                            
                            <div id="comments" class="comments-section">
                                <h4>{{ $article->comments->count() }} Comments</h4>
                                <ol class="comment-list">
                                    @foreach($article->comments as $comment)
                                        @include('blog.partials.comments')
                                    @endforeach                                        
                                </ol>
                            </div>
                            
                            <div class="comment-reply-form">
                               <h3>Leave a Replay</h3>
                                @if(Auth::check())
                                    <div class="comment-box mt-70 clearfix wow fadeInUp animated"  data-wow-delay=".4s">

                                        <div>
                                            {{ Form::open(['route' => ['comments.create', $article->id], 'method' => 'POST'])}}
                                            <div class="form-group">
                                                {{ Form::textarea('comment', '',['class' => 'form-control','placeholder' => 'Your comment ', 'rows' =>'5','cols' =>'5'])}}
                                                @if(Session::has('errors'))
                                                    <span class="help-block">{{ errors }}</span>
                                                @endif                                                
                                            </div>
                                            <div class="form-group">
                                                {{ Form::submit('Post Comment', ['class' => 'btn btn-transparent'])}}
                                            </div>                                            
                                            {{Form::close()}}
                                        </div>
                                    </div>    
                                @else
                                    <div class='col-lg-offset-1'>Pour poster un commentaire <a href="{{URL::route('login')}}">connectez vous</a></div>
                                @endif                               
                            </div>
                            <!-- End Single Post -->
                        </div>
                    </div>
                    
                    <!-- Widget Section -->
                    @include('blog.partials.sliderbar')
                    <!-- End Widget Section -->

                </div>	    <!-- End row -->
            </div>       <!-- End container -->
	</section>    <!-- End Section -->
@stop
