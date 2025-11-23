@extends('layouts.site')
@section('content')

<!-- MAIN-->
<main class="main">
	<div class="main-in wrapper">
		<h1 class="main-heading">Қазақ тіліндегі Microsoft Excel видео-курстары</h1>
		<h3 class="main-slogan">
			<i class="main-slogan-icon"></i>
			<span class="main-slogan-text">Телефонмен де көруге болады</span>
		</h3>
		<div class="main-ad">
			<ul class="main-ad-list main-ad-list_no_border">
				@php

				$welcomes = [
					'Әр сабақ жаңа білімге қадам болсын!',
					'Курсты жайлы және нәтижелі өтуге тілектеспіз!',
					'Әр сабақ сіздің мақсаттарыңызға қадам болсын!',
					'Оқуда сәттілік және материалды оңай қабылдауға тілектеспіз!'
				];

				$welcome_number = rand(0, 3);

				@endphp
				<span class="mal-item-text">Қош келдіңіз, {{ Auth::user()->name }}! {{ $welcomes[$welcome_number] }}</span>
			</ul>
		</div>
		<div class="main-block">
			@foreach($videos as $video)
			<div class="main-block-card">
				<div class="mb-card-video" id="video-{{ $video->location }}">
					<div class="mbc-video-cover">
						<img src="{{ asset('img/' . $video->poster . '.jpg') }}" alt="{{ $video->name }}">
					</div>
					<div class="mbc-video-buttons">
						<i class="mbcv-buttons-play">
							<svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewbox="0 0 24 24" width="64" height="64" fill="currentColor">
								<path d="m12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm0,21c-4.963,0-9-4.038-9-9S7.037,3,12,3s9,4.038,9,9-4.037,9-9,9Zm-3-13.5l8,4.5-8,4.5V7.5Z"></path>
							</svg>
						</i>
						<span class="mbcv-buttons-text">Тегін көру</span>
					</div>
				</div>
				<div class="mb-card-desc">
					<h3 class="mbc-desc-title">{{ $video->name }}</h3>
					<h2 class="mbc-desc-name">{{ $video->description }}</h2>
				</div>
				<div class="mb-card-materials">
					<ul class="mbc-materials-list">
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="{{ $video->lecture }}">Лекция</a></li>
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="{{ $video->presentation }}">Презентация</a></li>

						@if($loop->index !== 0)
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="{{ $video->practice }}">Практикалық жұмыс</a></li>
						@endif
					</ul>
				</div>
				<div class="mb-card-homework">
					<button class="mbc-homework-test" data-video-id="{{ $video->id }}" data-name="test">ТЕСТ №{{ $video->id }}</button>
					@php
						$videoTest = auth()->user()->tests()->find($video->id);
						$highestScore = $videoTest ? $videoTest->pivot->highest_score : 0;
						$highestScore = $highestScore * 100;
					@endphp
					<span class="mbc-homework-score" data-name="test-score-{{ $video->id }}">
						{{ $highestScore }}%
					</span>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</main>

<!-- VIDEO-->
@foreach($videos as $video)
<section class="video video-{{ $video->id }} d-none">
	<div class="video-in">
		<h3 class="video-title">№1 сабақ. Excel-мен танысу. Интерфейс. Ұяшықтар.</h3>
		<video class="video-js vjs-theme-sea" id="video-{{ $video->id }}" controls="" preload="auto" poster="{{ asset('img/U1.jpg') }}" data-setup='{"playbackRates": [0.5, 1, 1.5, 2]}'>
			<source src="{{ route('video.stream', ['filename' => $video->location . '.mp4']) }}" type="video/mp4">
			<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that<a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
		</video>
		<div class="video-close video-close-{{ $video->id }}">
			<svg width="40" height="40" viewbox="0 -0.5 8 8" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#fff"><defs></defs><g id="Page-1" stroke="none" stroke-width="1"><g id="Dribbble-Light-Preview" transform="translate(-385.000000, -206.000000)" fill="#fff"><g id="icons" transform="translate(56.000000, 160.000000)"><polygon id="close_mini-[#1522]" points="334.6 49.5 337 51.6 335.4 53 333 50.9 330.6 53 329 51.6 331.4 49.5 329 47.4 330.6 46 333 48.1 335.4 46 337 47.4"></polygon></g></g></g></svg>
		</div>
	</div>
	<script>
		$(function(){

			var player{{ $video->id }} = videojs('video-{{ $video->id }}');

			player{{ $video->id }}.landscapeFullscreen({
				fullscreen: {
					enterOnRotate: true,
					exitOnRotate: true,
					alwaysInLandscapeMode: true,
					iOS: true
		    	}
		  	});

			player{{ $video->id }}.src({
	            src: "{{ route('video.stream', ['filename' => $video->location . '.mp4']) }}",
	            type: 'video/mp4'
	        });

			document.getElementById('video-{{ $video->location }}').addEventListener('click', function() {

					$('body').addClass('o-h');

					if (windowRatio > 1.777777777777778) {
						$('#video-{{ $video->id }}').css('height', windowH * 0.8 + 'px');
						$('#video-{{ $video->id }}').css('width', windowH * 1.777777777777778 * 0.8 + 'px');
					} else {
						$('#video-{{ $video->id }}').css('width', windowW + 'px');
						$('#video-{{ $video->id }}').css('height', windowW / 1.777777777777778 + 'px');
					}

					$('.video-{{ $video->id }}').removeClass('d-none');

		        	player{{ $video->id }}.play();
		    });

			$('.video-close-{{ $video->id }}').on('click', function(){
				videojs('video-{{ $video->id }}').pause();
				$('.video-{{ $video->id }}').addClass('d-none');
				$('body').removeClass('o-h');
			})

		})
	</script>
</section>
@endforeach

<!-- TEST-->
<section class="test d-none">
	<div class="test-in">
		<div class="test-card">
			<div class="test-card-in">
				<div class="test-card-top">
					<div class="tc-top-left" id="testNumber"></div>
					<div class="tc-top-right" id="testQuestionNumber"></div>
				</div>
				<div class="test-card-head">
					<h2 id="testQuestion"></h2>
				</div>
				<form class="test-card-body" id="testForm" action="">
					<input type="hidden" name="test-user-id" id="testUserId" value="{{ Auth::user()->id }}">
					<label data-name="test-option" data-test-label="1">
						<input type="radio" name="answer" value="a">
						<i class="test-tick"></i>
						<span class="test-answer">A) <span id="testAnswerA" data-name="test-option-value"></span></span>
					</label>
					<label data-name="test-option" data-test-label="2">
						<input type="radio" name="answer" value="b">
						<i class="test-tick"></i>
						<span class="test-answer">B) <span id="testAnswerB" data-name="test-option-value"></span></span>
					</label>
					<label data-name="test-option" data-test-label="3">
						<input type="radio" name="answer" value="c">
						<i class="test-tick"></i>
						<span class="test-answer">C) <span id="testAnswerC" data-name="test-option-value"></span></span>
					</label>
					<label data-name="test-option" data-test-label="4">
						<input type="radio" name="answer" value="d">
						<i class="test-tick"></i>
						<span class="test-answer">D) <span id="testAnswerD" data-name="test-option-value"></span></span>
					</label>
				</form>
				<div class="test-card-result d-none">
					<div class="tc-result-head">
						<div class="tcr-head-score tcr-head-pass"></div>
						<div class="tcr-head-score tcr-head-fail"></div>
					</div>
					<div class="tc-result-info tc-result-info_fail">Бұл тестті сәтті өту үшін сұрақтардың <span class="tcr-info-score"></span>-на дұрыс жауап беру керек.</div>
					<div class="tc-result-info tc-result-info_pass">Құттықтаймыз! Тест сәтті өтілді!</div>
					<div class="tc-result-max">Сіздің ең жоғарғы нәтижеңіз: <span class="tcr-max-score"></span></div>
					<div class="tc-result-buttons">
						<button class="tcr-buttons-btn" data-name="test-close">Жабу</button>
					</div>
				</div>
				<div class="test-card-footer">
					<button class="tc-footer-btn tc-footer-btn_first d-none" id="testPrevPage" >
						<svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewbox="0 0 24 24" fill="#fff"><path d="M11,23.94L.89,14.13C.31,13.55,0,12.79,0,11.99,0,11.19,.31,10.43,.88,9.87h0S11,.06,11,.06V6.99h13v10H11v6.95Z"></path></svg>
					</button>
					<button class="tc-footer-btn tc-footer-btn_first tc-footer-btn_last" id="testNextPage">
						<svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewbox="0 0 24 24" fill="#fff"><path d="M11,23.94L.89,14.13C.31,13.55,0,12.79,0,11.99,0,11.19,.31,10.43,.88,9.87h0S11,.06,11,.06V6.99h13v10H11v6.95Z"></path></svg>
					</button>
					<button class="tc-footer-btn tc-footer-btn_first tc-footer-btn_last d-none" id="testFinish" >Тестті аяқтау</button>
				</div>
				<div class="test-close" data-name="test-close">
					<svg viewbox="0 -0.5 8 8" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs></defs><g id="Page-1" stroke="none" stroke-width="1"><g id="Dribbble-Light-Preview" transform="translate(-385.000000, -206.000000)" fill="#808080"><g id="icons" transform="translate(56.000000, 160.000000)"><polygon id="close_mini-[#1522]" points="334.6 49.5 337 51.6 335.4 53 333 50.9 330.6 53 329 51.6 331.4 49.5 329 47.4 330.6 46 333 48.1 335.4 46 337 47.4"></polygon></g></g></g></svg>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection