<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewreport" content="width=device-width, initial-scale=1.0">
	<title>
		Home Page
	</title>
    <style>
body{
	margin:0;
	padding:0;
	background:#fff;
	font-family: 'Raleway',sans-serif;
	color: #fff;
}
.banner{
	height: 100vh;
	width: 100%;
	background:url('assets/img/overlay.png'),url('assets/img/banner.jpg');
	background-position: top;
	background-size:cover;
	/*background-attachment: fixed;*/
	background-repeat: no-repeat;
}
.banner .navbar{
	margin-top:4%;
}
.banner .navbar-brand{
	color: #fff;
	font-size:1.8em;
	font-weight: 700;
	margin-left: 10%;
}
.banner .nav{
	margin-right:10%;
}
.banner .nav li a{
	color:#aaa;
	font-size: 1.2em;
}
.banner .info{
	margin-top:15%;
	transform: translateY(-15%);
}
.banner .info h1{
	font-size: 2.5em;
	font-weight: 700;
	color: #fff;
	letter-spacing: 2px;
}
.banner .info p{
	font-size: 2em;
	font-weight: 500;
	color: #aaa;
	letter-spacing: 2px;
}
.banner .info a{
	margin-left:50%;
	transform: translateX(-50%);
	color: #fff;
	background: #e91d43;
	padding:10px 20px;
	font-size: 2em;
	font-weight: 600;
}
.banner .info a:hover{
	background: #e91e63;
}

.nav-item a {
    position: relative;
}
.nav-item a:after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0%;
    border-bottom: 1px solid #093CAF;
    transition: 0.4s;
}

.nav-item a:hover:after {
    width: 100%;
}

    </style>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="index.css" />
</head>
<body>
	<div class="container-fluid banner">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-md">
					<div class="navbar-brand "><h1 class="font-weight-bold" style="font-family:sans-serif">Coin Tutorat</h1></div>
                      @if (Route::has('login'))
					<ul class="nav">
                        <li class="nav-item">
							@auth
                            <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                            @else
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">Login</a>
						</li>
                        @if (Route::has('register'))
						<li class="nav-item">
							<a href="{{ route('register') }}" class="nav-link">Register</a>
						</li>
                        @endif
                        @endauth
						<li class="nav-item">
							<a class="nav-link" href="#">Contact</a>
						</li>
					</ul>
                    @endif
				</nav>
			</div>
			<div class="col-md-8 offset-md-2 info">
				<h1 class="text-center"></h1>
				<p class="text-center">
					Seuls, nous ne sommes que des gouttes d’eau. Ensemble, nous formons un océan
				</p>
			</div>
		</div>
	</div>
</body>
</html>

