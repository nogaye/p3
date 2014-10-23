<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">	
	 <title>@yield('title', 'Project 3')</title>
	   <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" />
    <!-- Google fonts-->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine" />
	 <link rel='stylesheet' href='{{ asset('css/site.css') }}'>
	 @yield('head')

</head>
<body>

	 <nav class="navbar navbar-trader navbar-fixed-top " role="navigation">
	 	 <div class="t-title t-font">
            <span style="color: #d9534f" class="glyphicon glyphicon-lock"></span>An xkcd style password generator          
        </div>
   
    </nav>

 <div class="container body-content">
       
@yield('content')

    </div>


	 

 
	<div>
		<h1>You have arrived.</h1>
	</div>
	  

  <footer>
     
        <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">

                        <li><a href="#"> &copy;  Nicholas Ogaye</a></li>
                         <!--Inspired by:   <a href="http://xkcd.com/936/">http://xkcd.com/936/ </a> -->
                    </ul>


                </div><!-- /.navbar-collapse -->

            </div><!-- /.container-fluid -->
        </nav>
          @yield('footer')
    </footer>

  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' type='text/javascript'></script>

</body>
</html>


