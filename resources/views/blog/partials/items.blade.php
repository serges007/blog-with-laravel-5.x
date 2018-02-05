<article class="col-md-5 col-sm-8 col-xs-12 clearfix wow fadeInUp" data-wow-duration="500ms">
        <div class="note">
                <div class="media-wrapper">
                    <a href="{{URL::route('blog.show', $article->slug)}}">
                        <img src="{{url('images',$article->image->url)}}" alt="{{$article->slug}} image." class="img-responsive">                        
                    </a>
                </div>

                <div class="excerpt">
                        <h3>{{str_limit($article->title , $limit = 30, $end = "...")}}</h3>
                        <p>{{str_limit($article->content, $limit = 30, $end = "...")}}</p>
                        <a class="btn btn-transparent" href="{{URL::route('blog.show', $article->slug)}}">Read more</a>
                </div>
        </div>						
</article>