<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AMSCorp</title>

        <!-- Fonts -->
        <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">        
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.png')}}" />
		
        <!-- Styles -->
        <style>

        </style>
    </head>
    <body> 
        <!-- Fixed navbar -->
        <nav class="navbar navbar-fixed-top Nav">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}">MyBlog</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active text"><a href="{{ url('/dashboard') }}">Home</a></li>
                        @if (Auth::check())
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Profil</a></li>
                                    <li><a href="#">Modifier mot de passe</a></li>
                                    <li><a href="#">Modifier profil</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li class="dropdown-header">Admin</li>
                                    <li class="dropdown-header">Log Out</li>
                                </ul>
                            </li>
                        @else
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>   
                        @endif
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav><br><br>
        <div class="flex-center position-ref full-height container">
            <div class="content">
                <div class="title m-b-md">
                    MyBlog
                </div>
                
                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
                
                <div class="row text-center">
                  <div class="span12"></div>
                  <div class="span12"><hr /></div>
                  <div class="span12"></div>
                </div>
                <div class="row text-center pad-top-10">
                  <div class="span12"></div>
                  <div class="span12"><div id="nexway-leaderboard" style="width: 728px; margin: 0 auto;"></div></div>
                  <div class="span12"></div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <a href="http://blog.utorrent.com" target="_blank"><img src="img/blogpng.png" /></a>
                    <p class="text">Learn more about uTorrent!<br />Check out our blog.</p>
                  </div>
                  <div class="col-lg-4">
                    <a href="#" target="_blank"><img src="img/noadspng.png" /></a>
                    <p class="text">If you’re looking for a way to torrent on<br />Android, try our amazing, 4.5 star, app.</p>
                  </div>
                  <div class="col-lg-4">
                    <a href="#" target="_blank"><img src="img/mobilepng.png" /></a>
                    <p class="text">Try us without ads!<br />Go ad-free.</p>
                  </div>
                </div>
                
        <!-- Fixed footer -->
        <div class="navbar navbar-inverse navbar-fixed-bottom navbar-static-top" role="navigation" >
            <div class="container">
                <div class="navbar-text pull-left">
                        <p>© 2017 MyBlog.</p>
                </div>
            </div>
        </div>       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>        
    </body>
</html>
