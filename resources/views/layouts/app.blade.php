<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- head -->
<head>
<title>MATCH</title>
<link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap-CSS -->
<link href="/css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /><!-- Fontawesome-CSS -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type='text/javascript' src='/js/jquery-2.2.3.min.js'></script>
<!-- Custom Theme files -->
<link href="/css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style --> 
<!--theme-style-->
<link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<link rel="stylesheet" type="text/css" href="/css/easy-responsive-tabs.css " />
<!--meta data-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Match Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//meta data-->
<!-- online fonts -->
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;subset=devanagari,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!-- /online fonts -->
<!-- nav smooth scroll -->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>	
<!-- //nav smooth scroll -->			
<!-- Calendar -->
	<link rel="stylesheet" href="/css/jquery-ui.css" />
	<script src="/js/jquery-ui.js"></script>
		<script>
		  $(function() {
			$( "#datepicker" ).datepicker();
		 });
		</script>
<!-- //Calendar -->			
<link rel="stylesheet" href="css/intlTelInput.css">
</head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                 
                <a class="navbar-brand" href="{{ url('/home') }}">
                <h3>💍MATCH</h3>
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <div class="modal " id="con" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          		<div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Contact us</h5>

                    
                  </div>
                  <div class="modal-body">
                  <h5> Email at xyz@gmail.com</h5>
                  <h5>call on 1800 8000 8000</h5>
                  <form action="{{ route('contact.store' )}}" method="post" >

                    @csrf
					<input type="hidden" class="textbox" name="uid"value="{{ Auth::user()->id }}">
				
					<br>
                    
					<label >Message</label>

                    <input type="message" name="message" class="form-control input-lg" />

                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-danger" >send</button>
				  </form>
                </div>
               
              </div>
            </div>
          </div>
		 </div>
                                <a class="dropdown-item" href="{{ route('msg.index') }}">
                                    <h4>📧 Messages </h4>  
                                  </a>
                                    <a class="dropdown-item" href="{{ route('search.index') }}">
                                    <h4>Search profile </h4>  
                                    </a>
                                    <a class="dropdown-item" href="{{ route('noti.index') }}">
                                    <h4> Notifications </h4>  
                                    </a>
                                    <a class="dropdown-item" href="{{ route('int.index') }}">
                                     <h4>Interested profiles</h4>  
                                    </a>
                                    <a class="dropdown-item" href="{{ route('meet.index') }}">
                                    <h4>💑Meetings</h4>    
                                    </a>
                                    
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                   
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('prof.index') }}">
                                     My profile  
                                    </a>
                                  
                                    <a class="dropdown-item" href="{{ route('req.index') }}">
                                     Sent Requests   
                                    </a>
                                    <a class="dropdown-item" href="{{ route('rreq.index') }}">
                                     Recieved Requests   
                                    </a>
                                   
                                    
                                    <a class="dropdown-item" href="{{ route('meetreq.index') }}">
                                     Sent Meeting Requests   
                                    </a>
                                    <a class="dropdown-item" href="{{ route('meetrreq.index') }}">
                                     Received Meeting Requests   
                                    </a>
                                  
                                    <a class="dropdown-item" href="{{ route('matchreq.index') }}">
                                     Sent 💍 Request   
                                    </a>
                                    <a class="dropdown-item" href="{{ route('matchrreq.index') }}">
                                     Received 💍 Request   
                                    </a>
                                    <a class="dropdown-item" href="{{ route('match.index') }}">
                                      💍 status   
                                    </a>
                                    
                                    <a class="dropdown-item" href="{{ route('block.index') }}">
                                     Blocked profiles  
                                    </a>
                                    <a class="dropdown-item" href="{{ route('gen.index') }}">
                                     General info  
                                    </a>
                                    <a class="dropdown-item" href="#con"data-toggle="modal">
                                    📱 Contact us   
                                    </a>
                                   
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        🚪{{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
