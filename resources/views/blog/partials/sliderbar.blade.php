<!-- Widget Section -->
<div id="right-sidebar" class="col-md-4 col-sm-4">

   <!-- Single Widget -->
    <aside class="widget wow fadeInUp"  data-wow-duration="1000ms">
        <div class="widget-title">
           <h3>Search</h3>
        </div>
       <div class="widget-content">
           {{ Form::open(['route' => ['search'], 'method' => 'POST'])}}
                {{ Form::text('search', '',['class' => 'form-control','placeholder' => 'Search'])}}
                @if(Session::has('errors'))
                    <span class="help-block">{{ errors }}</span>
                @endif                                                                
<!--                <button type="submit" title="Search" id="search-submit"><i class="fa fa-search"></i></button>-->
                {{ Form::submit('', ['id' => 'search-submit','class' => 'fa fa-search'])}}
           {{Form::close()}}
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
                                @if($articles)    
                                    <div class="row">
                                        @foreach($articles as $article)
                                            <div class="clearfix">
                                                <div class="tab-thumb">
                                                    <img src="{{url('images',$article->image->url)}}" alt="{{$article->slug}} image." class="img-responsive">
                                                </div>
                                                <div class="tab-excerpt">
                                                    <h4><a href="{{URL::route('blog.show', $article->slug)}}">{{str_limit($article->title , $limit = 30, $end = "...")}}</a></h4>
                                                    <span>{{ $article->created_at->format('d/m/Y') }}</span>
                                                    <p>{{str_limit($article->title , $limit = 30, $end = "...")}}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>                            
                                @else
                                    <p>No articles</p>
                                @endif                             
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
           {{ Form::open(['route' => ['newsletter'], 'method' => 'POST'])}}
                {{ Form::text('email', '',['class' => 'form-control','placeholder' => 'Enter your email'])}}
                @if(Session::has('errors'))
                    <span class="help-block">{{ errors }}</span>
                @endif                                                                
                {{ Form::submit('Subscribe', ['class' => 'btn btn-transparent'])}}
           {{Form::close()}}            
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
                @foreach($categories as $categorie)
                    <li><i class="fa fa-plus"></i> <a href="{{URL::route('list.articles', $categorie->id)}}">{{$categorie->name}}</a></li>
                @endforeach
            </ul>
        </div>
    </aside>
    <!-- End Single Widget -->
</div>
