<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
		<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}">
</head>
<body>
	
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Polling System</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="#">Users</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Login</a></li>
				</ul>
			
			
		</div>
		
	</nav>
	
@yield('content')
<script src="{{ url('js/jquery-3.1.1.min.js')}}"></script>
<script src="{{ url('js/bootstrap.min.js')}}"></script>
</body>
</html>