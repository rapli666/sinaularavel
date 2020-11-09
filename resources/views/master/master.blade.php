<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
	<title>@yield('title')</title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Charm:wght@700&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@600&display=swap');
		.navbar {
			background-color: black;
		}
		.navss {
			color: white;
			margin-right: 10px;
			font-family: Charm;
		}
		.navs {
			color: white;
			font-family: 
		}
		.jmb{
			background-color: #e8e8e8;

		}
		body {
			background-color: #ecf4f3;
		}

		.home{
						font-family: Dancing Script;
		}
		.p{
			font-family: Cinzel
		}

	</style>
</head>
<body>
	@include('master._navigasi')
	@yield('content')
</body>
</html>