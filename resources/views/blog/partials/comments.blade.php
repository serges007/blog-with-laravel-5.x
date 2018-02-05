<li id="comment-1">
    <div class="comment-wrap">
        <div class="author-avatar pull-left">
            <!--       Ici l'image de l'utilisateur-->
            <img src="{{asset('img/blog/user.jpg')}}" alt="">
        </div>
        <div class="author-comment">
            <cite class="pull-left"><a href="#">{{$comment->user->name}}</a></cite>
            <div style="clear:both"></div>
            <div class="comment-meta">
                <i class="fa fa-calendar"></i>{{ $comment->created_at->format('d/m/Y') }}
            </div>
        </div>
        <div class="comment-content">
            <p>{{$comment->content}}</p>
        </div>
    </div>
</li>