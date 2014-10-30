<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Momo - blog</title>
  <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('css/main.css')}}" rel="stylesheet">
</head>
<body>
<div id="default" class="center-block">



<ul class="nav nav-pills" role="tablist">
	  <li role="presentation" class="active"><a href="#">Home</a></li>
	  <li role="presentation"><a href="#">Messages</a></li>
	  <li role="presentation"><a href="#">About</a></li>
	  <li class="pull-right"><button type="button" class="btn btn-default navbar-btn" >Sign in</button></li>
	  <li class="pull-right"><button type="button" class="btn btn-default navbar-btn" >Sign out</button></li>
</ul>

	
	
</div>

  @yield('main')


</body>
</html>