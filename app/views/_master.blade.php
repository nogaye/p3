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
<body class="container">

    <div class="header">
            <ul class="nav nav-pills pull-right">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/users">Generate Random Users</a></li>
                <li><a href="/loremipsum">Generate Lorem Ipsum</a></li>
                 
               
            </ul>
            <h3 class="text-muted"> <span style="color: #5cb85c" class="glyphicon glyphicon-thumbs-up"></span> Developer's Best Friend</h3>
            <hr/>
        </div>


 <div class="container body-content">
       
@yield('content')

    </div>



 <div  class="container footer  navbar-fixed-bottom">
    <hr/>
            <p>© Nicholas Ogaye 2014</p>
            @yield('footer')
        </div>


  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' type='text/javascript'></script>

</body>
</html>


