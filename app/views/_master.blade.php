<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">	
	 <title>@yield('title', "Developer's Best Friend")</title>
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

     <nav class="navbar" role="navigation">
         <div class="t-title t-font">
            <h2>
            <span style="color: white" class="glyphicon glyphicon-thumbs-up"></span>
            Developer's Best Friend
            <span style="color: white" class="glyphicon glyphicon-thumbs-up"></span>
        </h2>
        </div>
   
    </nav>

 <div class="container body-content">
       
@yield('content')

    </div>



  <footer>
     
        <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
            <div class="container-fluid">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" >
                    <ul class="nav navbar-nav">
                        <li><a href="#"> &copy;  2014 Nicholas Ogaye</a></li>
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


