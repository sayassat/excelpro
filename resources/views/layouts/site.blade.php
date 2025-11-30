<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>EXCEL PRO - Қазақ тіліндегі Microsoft Excel видео-курстары</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<style>
		@font-face {
			font-family: "Roboto";
			src: url({{ asset("font/Roboto-Regular.ttf") }}) format("truetype");
			font-weight: 400;
			font-style: normal;
		}

		@font-face {
			font-family: "Roboto";
			src: url({{ asset("font/Roboto-Bold.ttf") }}) format("truetype");
			font-weight: 700;
			font-style: bold;
		}
	</style>
	<link href="https://unpkg.com/video.js@7/dist/video-js.min.css" rel="stylesheet">
	<link href="https://unpkg.com/@videojs/themes@1/dist/city/index.css" rel="stylesheet">
	<link href="https://unpkg.com/@videojs/themes@1/dist/fantasy/index.css" rel="stylesheet">
	<link href="https://unpkg.com/@videojs/themes@1/dist/forest/index.css" rel="stylesheet">
	<link href="https://unpkg.com/@videojs/themes@1/dist/sea/index.css" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

	@yield('certificate-styles')

	<!-- SCRIPTS-->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="https://vjs.zencdn.net/8.23.4/video.min.js"></script>
	<script src="{{ asset('js/videojs-landscape-fullscreen.js') }}"></script>
	<script src="{{ asset('js/jquery.mask.min.js') }}"></script>
	<script src="{{ asset('js/scripts.js') }}"></script>
</head>

<body class="o-h">

	<!-- HEADER-->
	<header class="header">
		<div class="header-in wrapper flexed">
			<div class="header-left">
				<a class="logo" href="/">
					<img src="{{ asset('img/logo.png') }}" alt="Логотип Excel Pro">
				</a>
			</div>
			<div class="header-center">Қазақстанда №1</div>
			<nav class="header-menu">
				@auth
 				<div class="header-menu-btn">
					<span>{{ Auth::user()->name }}</span>
					<i class="icon-triangle rotated">
						<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" width="20" height="20" fill="white">
							<g id="Capa_13" data-name="Capa 13">
								<path d="M19.948,23H4.052A4.03,4.03,0,0,1,.6,21.088a3.947,3.947,0,0,1-.182-3.86L8.38,3.212a4.068,4.068,0,0,1,7.253.026l7.922,13.941a3.967,3.967,0,0,1-.156,3.909A4.03,4.03,0,0,1,19.948,23Z"></path>
							</g>
						</svg>
					</i>
					<ul class="header-menu-list d-none">
						<li class="hm-list-item">
							<a class="hml-item-link" href="{{ route('user.show') }}">Менің профилім</a>
						</li>
						<li class="hm-list-item">
							<a class="hml-item-link" href="{{ route('qa.index') }}">Сұрақ-жауап</a>
						</li>
						<li class="hm-list-item">
							<a class="hml-item-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Шығу</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
						</li>
					</ul>
				</div>
				@else
				<a class="header-menu-btn" href="{{ route('qa.index') }}">
					<span>Сұрақ-жауап</span>
					<i class="hm-btn-icon">
						<svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewbox="0 0 24 24" fill="white">
							<path d="M15.938,8.288c.298,1.696-.509,3.391-2.008,4.217,0,0-.415,.218-.466,.245-.157,.677-.757,1.251-1.463,1.251-.811-.023-1.5-.688-1.5-1.5,0-1.585,1.13-2.176,1.737-2.493l.243-.129c.291-.16,.596-.537,.502-1.071-.067-.383-.406-.722-.789-.789-.613-.11-1.129,.316-1.224,.781-.165,.811-.957,1.33-1.769,1.171-.812-.165-1.336-.957-1.171-1.769,.429-2.11,2.531-3.518,4.683-3.139,1.615,.283,2.941,1.61,3.225,3.225Zm-3.938,7.712c-.828,0-1.5,.672-1.5,1.5s.672,1.5,1.5,1.5,1.5-.672,1.5-1.5-.672-1.5-1.5-1.5ZM24,5.5v13c0,3.032-2.467,5.5-5.5,5.5H5.5c-3.033,0-5.5-2.468-5.5-5.5V5.5C0,2.467,2.467,0,5.5,0h13c3.033,0,5.5,2.467,5.5,5.5Zm-3,0c0-1.378-1.122-2.5-2.5-2.5H5.5c-1.378,0-2.5,1.122-2.5,2.5v13c0,1.379,1.122,2.5,2.5,2.5h13c1.378,0,2.5-1.121,2.5-2.5V5.5Z"></path>
						</svg>
					</i>
				</a>
				<a class="header-menu-btn" href="{{ route('login') }}">
					<span>Кіру</span>
					<i class="hm-btn-icon">
						<svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewbox="0 0 24 24" fill="white">
							<path d="M18.589,0H5.411A5.371,5.371,0,0,0,0,5.318V7.182a1.5,1.5,0,0,0,3,0V5.318A2.369,2.369,0,0,1,5.411,3H18.589A2.369,2.369,0,0,1,21,5.318V18.682A2.369,2.369,0,0,1,18.589,21H5.411A2.369,2.369,0,0,1,3,18.682V16.818a1.5,1.5,0,1,0-3,0v1.864A5.371,5.371,0,0,0,5.411,24H18.589A5.371,5.371,0,0,0,24,18.682V5.318A5.371,5.371,0,0,0,18.589,0Z"></path>
							<path d="M3.5,12A1.5,1.5,0,0,0,5,13.5H5l9.975-.027-3.466,3.466a1.5,1.5,0,0,0,2.121,2.122l4.586-4.586a3.5,3.5,0,0,0,0-4.95L13.634,4.939a1.5,1.5,0,1,0-2.121,2.122l3.413,3.412L5,10.5A1.5,1.5,0,0,0,3.5,12Z"></path>
						</svg>
					</i>
				</a>
				@endauth
			</nav>
		</div>
	</header>

	@yield('content')

	<!-- FOOTER-->
	<footer class="footer">
		<div class="footer-in wrapper">
			<div class="footer-left">Excel Pro | ИП “Фронт Айти” | Все права защищены. Копирование и распространение без согласия автора запрещено | 2025 год</div>
			<div class="footer-right"><a class="footer-right-link" href="#"><i class="fr-link-icon"><svg id="Outline" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" width="24" height="24" fill="currentColor">
							<path d="M19,1H5A5.006,5.006,0,0,0,0,6V18a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V6A5.006,5.006,0,0,0,19,1ZM5,3H19a3,3,0,0,1,2.78,1.887l-7.658,7.659a3.007,3.007,0,0,1-4.244,0L2.22,4.887A3,3,0,0,1,5,3ZM19,21H5a3,3,0,0,1-3-3V7.5L8.464,13.96a5.007,5.007,0,0,0,7.072,0L22,7.5V18A3,3,0,0,1,19,21Z"></path>
						</svg></i></a><a class="footer-right-link" href="#"><i class="fr-link-icon"><svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewbox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve" width="24" height="24" fill="currentColor">
							<g>
								<path d="M12,2.162c3.204,0,3.584,0.012,4.849,0.07c1.308,0.06,2.655,0.358,3.608,1.311c0.962,0.962,1.251,2.296,1.311,3.608   c0.058,1.265,0.07,1.645,0.07,4.849c0,3.204-0.012,3.584-0.07,4.849c-0.059,1.301-0.364,2.661-1.311,3.608   c-0.962,0.962-2.295,1.251-3.608,1.311c-1.265,0.058-1.645,0.07-4.849,0.07s-3.584-0.012-4.849-0.07   c-1.291-0.059-2.669-0.371-3.608-1.311c-0.957-0.957-1.251-2.304-1.311-3.608c-0.058-1.265-0.07-1.645-0.07-4.849   c0-3.204,0.012-3.584,0.07-4.849c0.059-1.296,0.367-2.664,1.311-3.608c0.96-0.96,2.299-1.251,3.608-1.311   C8.416,2.174,8.796,2.162,12,2.162 M12,0C8.741,0,8.332,0.014,7.052,0.072C5.197,0.157,3.355,0.673,2.014,2.014   C0.668,3.36,0.157,5.198,0.072,7.052C0.014,8.332,0,8.741,0,12c0,3.259,0.014,3.668,0.072,4.948c0.085,1.853,0.603,3.7,1.942,5.038   c1.345,1.345,3.186,1.857,5.038,1.942C8.332,23.986,8.741,24,12,24c3.259,0,3.668-0.014,4.948-0.072   c1.854-0.085,3.698-0.602,5.038-1.942c1.347-1.347,1.857-3.184,1.942-5.038C23.986,15.668,24,15.259,24,12   c0-3.259-0.014-3.668-0.072-4.948c-0.085-1.855-0.602-3.698-1.942-5.038c-1.343-1.343-3.189-1.858-5.038-1.942   C15.668,0.014,15.259,0,12,0z"></path>
								<path d="M12,5.838c-3.403,0-6.162,2.759-6.162,6.162c0,3.403,2.759,6.162,6.162,6.162s6.162-2.759,6.162-6.162   C18.162,8.597,15.403,5.838,12,5.838z M12,16c-2.209,0-4-1.791-4-4s1.791-4,4-4s4,1.791,4,4S14.209,16,12,16z"></path>
								<circle cx="18.406" cy="5.594" r="1.44"></circle>
							</g>
						</svg></i></a><a class="footer-right-link" href="#"><i class="fr-link-icon"><svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewbox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve" width="24" height="24" fill="currentColor">
							<path d="M22.465,9.866c-2.139,0-4.122-0.684-5.74-1.846v8.385c0,4.188-3.407,7.594-7.594,7.594c-1.618,0-3.119-0.51-4.352-1.376  c-1.958-1.375-3.242-3.649-3.242-6.218c0-4.188,3.407-7.595,7.595-7.595c0.348,0,0.688,0.029,1.023,0.074v0.977v3.235  c-0.324-0.101-0.666-0.16-1.023-0.16c-1.912,0-3.468,1.556-3.468,3.469c0,1.332,0.756,2.489,1.86,3.07  c0.481,0.253,1.028,0.398,1.609,0.398c1.868,0,3.392-1.486,3.462-3.338L12.598,0h4.126c0,0.358,0.035,0.707,0.097,1.047  c0.291,1.572,1.224,2.921,2.517,3.764c0.9,0.587,1.974,0.93,3.126,0.93V9.866z"></path>
						</svg></i></a></div>
		</div>
	</footer>
	<div class="loader-container">
		<div class="loader-container-in">
			<span class="loader"></span>
		</div>
	</div>
</body>

</html>