@extends('layouts.site')
@section('content')
<!-- MAIN-->
<main class="main">
	<div class="main-in wrapper">
		<h1 class="main-heading">Қазақ тіліндегі Microsoft Excel видео-курстары</h1>
		<h3 class="main-slogan"><i class="main-slogan-icon"></i><span class="main-slogan-text">Телефонмен де көруге болады</span></h3>
		<div class="main-ad">
			<ul class="main-ad-list">
				<li class="ma-list-item"><i class="mal-item-icon mal-item-icon_free"><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewbox="0 0 24 24" fill="#1E1E1E">
							<path d="M10.9,10.5c0,.496-.404,.9-.9,.9h-.4v-1.8h.4c.496,0,.9,.404,.9,.9Zm13.1-2.5v8c0,2.757-2.243,5-5,5H5c-2.757,0-5-2.243-5-5V8C0,5.243,2.243,3,5,3h14c2.757,0,5,2.243,5,5ZM5.6,11.4v-1.801h.601c.442,0,.8-.358,.8-.8s-.358-.8-.8-.8h-1.4c-.442,0-.8,.358-.8,.8v6.4c0,.442,.358,.8,.8,.8s.8-.358,.8-.8v-2.2h.601c.442,0,.8-.358,.8-.8s-.358-.8-.8-.8h-.601Zm5.833,1.144c.657-.462,1.084-1.229,1.066-2.097-.028-1.37-1.187-2.447-2.556-2.447h-1.143c-.442,0-.8,.358-.8,.8v6.4c0,.442,.358,.8,.8,.8h0c.442,0,.8-.358,.8-.8v-2.2h.284l.705,2.423c.099,.342,.412,.577,.768,.577h.063c.537,0,.922-.519,.765-1.033l-.739-2.43c.023-.017,.024-.016,.042-.029-.019,.012-.031,.021-.055,.035Zm3.167-1.344v-1.601h.601c.442,0,.8-.358,.8-.8s-.358-.8-.8-.8h-1.4c-.442,0-.8,.358-.8,.8v6.4c0,.442,.358,.8,.8,.8h1.4c.442,0,.8-.358,.8-.8s-.358-.8-.8-.8h-.601v-1.601h.601c.442,0,.8-.358,.8-.8s-.358-.8-.8-.8h-.601Zm4,0v-1.601h.601c.442,0,.8-.358,.8-.8s-.358-.8-.8-.8h-1.4c-.442,0-.8,.358-.8,.8v6.4c0,.442,.358,.8,.8,.8h1.4c.442,0,.8-.358,.8-.8s-.358-.8-.8-.8h-.601v-1.601h.601c.442,0,.8-.358,.8-.8s-.358-.8-.8-.8h-.601Z"></path>
						</svg></i><span class="mal-item-text">1-ші сабақты <span class="red-color">ТЕГІН </span>көріңіз</span></li>
				<li class="ma-list-item ma-list-item_price"><i class="mal-item-icon mal-item-icon_dollar"><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewbox="0 0 24 24" fill="#1E1E1E">
							<path d="M11.994,1C4.929,1.044,1,5.122,1,11.982c0,7.039,3.933,10.977,11.006,11.018,7.162-.042,10.861-3.737,10.994-11.017-.122-7.037-4.026-10.938-11.006-10.983Zm2.311,15.093c-.395,.403-.877,.702-1.394,.873-.012,.542-.454,.978-.999,.978s-.989-.437-1-.98c-.907-.301-1.685-.982-2.083-1.877-.226-.504,0-1.096,.506-1.321,.503-.226,1.096,.002,1.32,.505,.184,.411,.657,.856,1.265,.861,.332-.003,.687-.163,.957-.439,.243-.249,.387-.558,.383-.829-.011-.569-.632-1.059-1.356-1.065-.86-.006-1.681-.356-2.248-.961-.526-.56-.793-1.278-.751-2.024,.073-1.235,.918-2.322,2.008-2.752v-.007c0-.552,.447-1,1-1s1,.448,1,1v.004c.56,.217,1.062,.609,1.432,1.137,.317,.452,.208,1.076-.244,1.393-.453,.319-1.076,.208-1.393-.244-.206-.293-.512-.476-.799-.477-.481,.002-.975,.518-1.008,1.062-.014,.244,.107,.429,.212,.54,.195,.208,.489,.329,.807,.331,1.812,.016,3.309,1.376,3.341,3.033,.011,.809-.337,1.63-.954,2.26Z"></path>
						</svg></i><span class="mal-item-text">Толық курстың бағасы не бәрі <span class="ad-price">4 999 </span>теңге <span class="ad-discount">-30%</span></span></li>
				<li class="ma-list-item"><i class="mal-item-icon mal-item-icon_clock"><svg id="Filled" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="#1E1E1E">
							<path d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm1,11.879a1,1,0,0,1-.469.848l-3.84,2.4a1,1,0,1,1-1.062-1.7L11,11.325V7a1,1,0,0,1,2,0Z"></path>
						</svg></i><span class="mal-item-text">Курс ұзақтығы 3.5 сағат</span></li>
				<li class="ma-list-item"><i class="mal-item-icon mal-item-icon_duration"><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewbox="0 0 24 24" fill="#1E1E1E">
							<path d="m18,12c-3.309,0-6,2.691-6,6s2.691,6,6,6,6-2.691,6-6-2.691-6-6-6Zm2.207,8.207c-.195.195-.451.293-.707.293s-.512-.098-.707-.293l-1.5-1.5c-.188-.188-.293-.442-.293-.707v-2.5c0-.552.448-1,1-1s1,.448,1,1v2.086l1.207,1.207c.391.391.391,1.023,0,1.414Zm-10.207-2.207c0-4.418,3.582-8,8-8,1.893,0,3.63.661,5,1.76v-6.76c0-2.757-2.243-5-5-5H5C2.243,0,0,2.243,0,5v9c0,2.757,2.243,5,5,5h5.069c-.041-.328-.069-.661-.069-1Zm-2-6.683v-4.597c0-.901.968-1.47,1.755-1.033l4.137,2.299c.81.45.81,1.615,0,2.065l-4.137,2.299c-.787.437-1.755-.132-1.755-1.033Z"></path>
						</svg></i><span class="mal-item-text">10 сабақ (20 мин)</span></li>
				<li class="ma-list-item"><i class="mal-item-icon mal-item-icon_cert"><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewbox="0 0 24 24" fill="#1E1E1E">
							<path d="m19,1.949H5C2.243,1.949,0,4.192,0,6.949v10c0,2.757,2.243,5,5,5h6.5v-2.058c-.729-.823-1.211-1.821-1.404-2.891h-4.096c-.553,0-1-.448-1-1s.447-1,1-1h4.082c.115-.717.353-1.391.698-2h-4.781c-.553,0-1-.448-1-1s.447-1,1-1h6.614c.965-.662,2.13-1.051,3.386-1.051,3.309,0,6,2.691,6,6,0,1.462-.537,2.854-1.5,3.942v1.802c2.021-.642,3.5-2.514,3.5-4.745V6.949c0-2.757-2.243-5-5-5Zm-1,7.051H6c-.553,0-1-.448-1-1s.447-1,1-1h12c.553,0,1,.448,1,1s-.447,1-1,1Zm2,7c0-2.206-1.794-4-4-4s-4,1.794-4,4c0,1.255.593,2.363,1.5,3.097v4.25c0,.623.791.89,1.169.395l1.331-1.743,1.331,1.743c.378.495,1.169.228,1.169-.395v-4.25c.907-.734,1.5-1.842,1.5-3.097Z"></path>
						</svg></i><span class="mal-item-text">Онлайн <span class="red-color">сертификат </span>беріледі</span></li>
			</ul>
			<div class="main-buttons"><a class="main-buttons-signup" href="{{ route('register') }}">Тіркелу</a></div>
		</div>
		<div class="main-block">
			<div class="main-block-card">
				<div class="mb-card-video" id="video_1">
					<div class="mbc-video-cover">
						<img src="img/u1.jpg" alt="">
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
					<h3 class="mbc-desc-title">№1 сабақ.</h3>
					<h2 class="mbc-desc-name">Excel-мен танысу. Интерфейс. Ұяшықтар.</h2>
				</div>
				<div class="mb-card-materials">
					<ul class="mbc-materials-list">
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="#">Лекция</a></li>
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="#">Презентация</a></li>
					</ul>
				</div>
				<div class="mb-card-homework"><a class="mbc-homework-test" id="test1" href="#" data-id="test1">ТЕСТ №1</a><span class="mbc-homework-score">100%</span></div>
			</div>
			<div class="main-block-card">
				<div class="mb-card-video">
					<div class="mbc-video-cover"><img src="img/u1.jpg" alt=""></div>
					<div class="mbc-video-buttons"><i class="mbcv-buttons-play"><svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="64" height="64" fill="currentColor">
								<g>
									<path d="M405.333,179.712v-30.379C405.333,66.859,338.475,0,256,0S106.667,66.859,106.667,149.333v30.379   c-38.826,16.945-63.944,55.259-64,97.621v128C42.737,464.214,90.452,511.93,149.333,512h213.333   c58.881-0.07,106.596-47.786,106.667-106.667v-128C469.278,234.971,444.159,196.657,405.333,179.712z M277.333,362.667   c0,11.782-9.551,21.333-21.333,21.333c-11.782,0-21.333-9.551-21.333-21.333V320c0-11.782,9.551-21.333,21.333-21.333   c11.782,0,21.333,9.551,21.333,21.333V362.667z M362.667,170.667H149.333v-21.333c0-58.91,47.756-106.667,106.667-106.667   s106.667,47.756,106.667,106.667V170.667z"></path>
								</g>
							</svg></i><span class="mbcv-buttons-text">Ашу</span></div>
				</div>
				<div class="mb-card-desc">
					<h3 class="mbc-desc-title">№2 сабақ.</h3>
					<h2 class="mbc-desc-name">Главная вкладкасындағы құрал-саймандармен жұмыс жасап үйрену.</h2>
				</div>
				<div class="mb-card-materials">
					<ul class="mbc-materials-list">
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="#">Лекция</a></li>
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="#">Презентация</a></li>
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="#">Практикалық жұмыс</a></li>
					</ul>
				</div>
				<div class="mb-card-homework"><a class="mbc-homework-test" href="#">ТЕСТ №2</a><span class="mbc-homework-score">50%</span></div>
			</div>
			<div class="main-block-card">
				<div class="mb-card-video">
					<div class="mbc-video-cover"><img src="img/u1.jpg" alt=""></div>
					<div class="mbc-video-buttons"><i class="mbcv-buttons-play"><svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="64" height="64" fill="currentColor">
								<g>
									<path d="M405.333,179.712v-30.379C405.333,66.859,338.475,0,256,0S106.667,66.859,106.667,149.333v30.379   c-38.826,16.945-63.944,55.259-64,97.621v128C42.737,464.214,90.452,511.93,149.333,512h213.333   c58.881-0.07,106.596-47.786,106.667-106.667v-128C469.278,234.971,444.159,196.657,405.333,179.712z M277.333,362.667   c0,11.782-9.551,21.333-21.333,21.333c-11.782,0-21.333-9.551-21.333-21.333V320c0-11.782,9.551-21.333,21.333-21.333   c11.782,0,21.333,9.551,21.333,21.333V362.667z M362.667,170.667H149.333v-21.333c0-58.91,47.756-106.667,106.667-106.667   s106.667,47.756,106.667,106.667V170.667z"></path>
								</g>
							</svg></i><span class="mbcv-buttons-text">Ашу</span></div>
				</div>
				<div class="mb-card-desc">
					<h3 class="mbc-desc-title">№3 сабақ.</h3>
					<h2 class="mbc-desc-name">Excel-мен танысу. Интерфейс. Ұяшықтар.</h2>
				</div>
				<div class="mb-card-materials">
					<ul class="mbc-materials-list">
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="#">Лекция</a></li>
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="#">Презентация</a></li>
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="#">Практикалық жұмыс</a></li>
					</ul>
				</div>
				<div class="mb-card-homework"><a class="mbc-homework-test" href="#">ТЕСТ №3</a><span class="mbc-homework-score">28%</span></div>
			</div>
			<div class="main-block-card">
				<div class="mb-card-video">
					<div class="mbc-video-cover"><img src="img/u1.jpg" alt=""></div>
					<div class="mbc-video-buttons"><i class="mbcv-buttons-play"><svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="64" height="64" fill="currentColor">
								<g>
									<path d="M405.333,179.712v-30.379C405.333,66.859,338.475,0,256,0S106.667,66.859,106.667,149.333v30.379   c-38.826,16.945-63.944,55.259-64,97.621v128C42.737,464.214,90.452,511.93,149.333,512h213.333   c58.881-0.07,106.596-47.786,106.667-106.667v-128C469.278,234.971,444.159,196.657,405.333,179.712z M277.333,362.667   c0,11.782-9.551,21.333-21.333,21.333c-11.782,0-21.333-9.551-21.333-21.333V320c0-11.782,9.551-21.333,21.333-21.333   c11.782,0,21.333,9.551,21.333,21.333V362.667z M362.667,170.667H149.333v-21.333c0-58.91,47.756-106.667,106.667-106.667   s106.667,47.756,106.667,106.667V170.667z"></path>
								</g>
							</svg></i><span class="mbcv-buttons-text">Ашу</span></div>
				</div>
				<div class="mb-card-desc">
					<h3 class="mbc-desc-title">№4 сабақ.</h3>
					<h2 class="mbc-desc-name">Главная вкладкасындағы құрал-саймандармен жұмыс жасап үйрену.</h2>
				</div>
				<div class="mb-card-materials">
					<ul class="mbc-materials-list">
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="#">Лекция</a></li>
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="#">Презентация</a></li>
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="#">Практикалық жұмыс</a></li>
					</ul>
				</div>
				<div class="mb-card-homework"><a class="mbc-homework-test" href="#">ТЕСТ №4</a><span class="mbc-homework-score">0%</span></div>
			</div>
			<div class="main-block-card">
				<div class="mb-card-video">
					<div class="mbc-video-cover"><img src="img/u1.jpg" alt=""></div>
					<div class="mbc-video-buttons"><i class="mbcv-buttons-play"><svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="64" height="64" fill="currentColor">
								<g>
									<path d="M405.333,179.712v-30.379C405.333,66.859,338.475,0,256,0S106.667,66.859,106.667,149.333v30.379   c-38.826,16.945-63.944,55.259-64,97.621v128C42.737,464.214,90.452,511.93,149.333,512h213.333   c58.881-0.07,106.596-47.786,106.667-106.667v-128C469.278,234.971,444.159,196.657,405.333,179.712z M277.333,362.667   c0,11.782-9.551,21.333-21.333,21.333c-11.782,0-21.333-9.551-21.333-21.333V320c0-11.782,9.551-21.333,21.333-21.333   c11.782,0,21.333,9.551,21.333,21.333V362.667z M362.667,170.667H149.333v-21.333c0-58.91,47.756-106.667,106.667-106.667   s106.667,47.756,106.667,106.667V170.667z"></path>
								</g>
							</svg></i><span class="mbcv-buttons-text">Ашу</span></div>
				</div>
				<div class="mb-card-desc">
					<h3 class="mbc-desc-title">№5 сабақ.</h3>
					<h2 class="mbc-desc-name">Excel-мен танысу. Интерфейс. Ұяшықтар.</h2>
				</div>
				<div class="mb-card-materials">
					<ul class="mbc-materials-list">
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="#">Лекция</a></li>
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="#">Презентация</a></li>
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="#">Практикалық жұмыс</a></li>
					</ul>
				</div>
				<div class="mb-card-homework"><a class="mbc-homework-test" href="#">ТЕСТ №5</a><span class="mbc-homework-score">0%</span></div>
			</div>
			<div class="main-block-card">
				<div class="mb-card-video">
					<div class="mbc-video-cover"><img src="img/u1.jpg" alt=""></div>
					<div class="mbc-video-buttons"><i class="mbcv-buttons-play"><svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="64" height="64" fill="currentColor">
								<g>
									<path d="M405.333,179.712v-30.379C405.333,66.859,338.475,0,256,0S106.667,66.859,106.667,149.333v30.379   c-38.826,16.945-63.944,55.259-64,97.621v128C42.737,464.214,90.452,511.93,149.333,512h213.333   c58.881-0.07,106.596-47.786,106.667-106.667v-128C469.278,234.971,444.159,196.657,405.333,179.712z M277.333,362.667   c0,11.782-9.551,21.333-21.333,21.333c-11.782,0-21.333-9.551-21.333-21.333V320c0-11.782,9.551-21.333,21.333-21.333   c11.782,0,21.333,9.551,21.333,21.333V362.667z M362.667,170.667H149.333v-21.333c0-58.91,47.756-106.667,106.667-106.667   s106.667,47.756,106.667,106.667V170.667z"></path>
								</g>
							</svg></i><span class="mbcv-buttons-text">Ашу</span></div>
				</div>
				<div class="mb-card-desc">
					<h3 class="mbc-desc-title">№6 сабақ.</h3>
					<h2 class="mbc-desc-name">Главная вкладкасындағы құрал-саймандармен жұмыс жасап үйрену.</h2>
				</div>
				<div class="mb-card-materials">
					<ul class="mbc-materials-list">
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="#">Лекция</a></li>
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="#">Презентация</a></li>
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="#">Практикалық жұмыс</a></li>
					</ul>
				</div>
				<div class="mb-card-homework"><a class="mbc-homework-test" href="#">ТЕСТ №6</a><span class="mbc-homework-score">70%</span></div>
			</div>
			<div class="main-block-card">
				<div class="mb-card-video">
					<div class="mbc-video-cover"><img src="img/u1.jpg" alt=""></div>
					<div class="mbc-video-buttons"><i class="mbcv-buttons-play"><svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="64" height="64" fill="currentColor">
								<g>
									<path d="M405.333,179.712v-30.379C405.333,66.859,338.475,0,256,0S106.667,66.859,106.667,149.333v30.379   c-38.826,16.945-63.944,55.259-64,97.621v128C42.737,464.214,90.452,511.93,149.333,512h213.333   c58.881-0.07,106.596-47.786,106.667-106.667v-128C469.278,234.971,444.159,196.657,405.333,179.712z M277.333,362.667   c0,11.782-9.551,21.333-21.333,21.333c-11.782,0-21.333-9.551-21.333-21.333V320c0-11.782,9.551-21.333,21.333-21.333   c11.782,0,21.333,9.551,21.333,21.333V362.667z M362.667,170.667H149.333v-21.333c0-58.91,47.756-106.667,106.667-106.667   s106.667,47.756,106.667,106.667V170.667z"></path>
								</g>
							</svg></i><span class="mbcv-buttons-text">Ашу</span></div>
				</div>
				<div class="mb-card-desc">
					<h3 class="mbc-desc-title">№7 сабақ.</h3>
					<h2 class="mbc-desc-name">Excel-мен танысу. Интерфейс. Ұяшықтар.</h2>
				</div>
				<div class="mb-card-materials">
					<ul class="mbc-materials-list">
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="#">Лекция</a></li>
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="#">Презентация</a></li>
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="#">Практикалық жұмыс</a></li>
					</ul>
				</div>
				<div class="mb-card-homework"><a class="mbc-homework-test" href="#">ТЕСТ №7</a><span class="mbc-homework-score">0%</span></div>
			</div>
			<div class="main-block-card">
				<div class="mb-card-video">
					<div class="mbc-video-cover"><img src="img/u1.jpg" alt=""></div>
					<div class="mbc-video-buttons"><i class="mbcv-buttons-play"><svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="64" height="64" fill="currentColor">
								<g>
									<path d="M405.333,179.712v-30.379C405.333,66.859,338.475,0,256,0S106.667,66.859,106.667,149.333v30.379   c-38.826,16.945-63.944,55.259-64,97.621v128C42.737,464.214,90.452,511.93,149.333,512h213.333   c58.881-0.07,106.596-47.786,106.667-106.667v-128C469.278,234.971,444.159,196.657,405.333,179.712z M277.333,362.667   c0,11.782-9.551,21.333-21.333,21.333c-11.782,0-21.333-9.551-21.333-21.333V320c0-11.782,9.551-21.333,21.333-21.333   c11.782,0,21.333,9.551,21.333,21.333V362.667z M362.667,170.667H149.333v-21.333c0-58.91,47.756-106.667,106.667-106.667   s106.667,47.756,106.667,106.667V170.667z"></path>
								</g>
							</svg></i><span class="mbcv-buttons-text">Ашу</span></div>
				</div>
				<div class="mb-card-desc">
					<h3 class="mbc-desc-title">№8 сабақ.</h3>
					<h2 class="mbc-desc-name">Главная вкладкасындағы құрал-саймандармен жұмыс жасап үйрену.</h2>
				</div>
				<div class="mb-card-materials">
					<ul class="mbc-materials-list">
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="#">Лекция</a></li>
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="#">Презентация</a></li>
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="#">Практикалық жұмыс</a></li>
					</ul>
				</div>
				<div class="mb-card-homework"><a class="mbc-homework-test" href="#">ТЕСТ №8</a><span class="mbc-homework-score">0%</span></div>
			</div>
			<div class="main-block-card">
				<div class="mb-card-video">
					<div class="mbc-video-cover"><img src="img/u1.jpg" alt=""></div>
					<div class="mbc-video-buttons"><i class="mbcv-buttons-play"><svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="64" height="64" fill="currentColor">
								<g>
									<path d="M405.333,179.712v-30.379C405.333,66.859,338.475,0,256,0S106.667,66.859,106.667,149.333v30.379   c-38.826,16.945-63.944,55.259-64,97.621v128C42.737,464.214,90.452,511.93,149.333,512h213.333   c58.881-0.07,106.596-47.786,106.667-106.667v-128C469.278,234.971,444.159,196.657,405.333,179.712z M277.333,362.667   c0,11.782-9.551,21.333-21.333,21.333c-11.782,0-21.333-9.551-21.333-21.333V320c0-11.782,9.551-21.333,21.333-21.333   c11.782,0,21.333,9.551,21.333,21.333V362.667z M362.667,170.667H149.333v-21.333c0-58.91,47.756-106.667,106.667-106.667   s106.667,47.756,106.667,106.667V170.667z"></path>
								</g>
							</svg></i><span class="mbcv-buttons-text">Ашу</span></div>
				</div>
				<div class="mb-card-desc">
					<h3 class="mbc-desc-title">№9 сабақ.</h3>
					<h2 class="mbc-desc-name">Excel-мен танысу. Интерфейс. Ұяшықтар.</h2>
				</div>
				<div class="mb-card-materials">
					<ul class="mbc-materials-list">
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="#">Лекция</a></li>
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="#">Презентация</a></li>
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="#">Практикалық жұмыс</a></li>
					</ul>
				</div>
				<div class="mb-card-homework"><a class="mbc-homework-test" href="#">ТЕСТ №9</a><span class="mbc-homework-score">0%</span></div>
			</div>
			<div class="main-block-card">
				<div class="mb-card-video">
					<div class="mbc-video-cover"><img src="img/u1.jpg" alt=""></div>
					<div class="mbc-video-buttons"><i class="mbcv-buttons-play"><svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="64" height="64" fill="currentColor">
								<g>
									<path d="M405.333,179.712v-30.379C405.333,66.859,338.475,0,256,0S106.667,66.859,106.667,149.333v30.379   c-38.826,16.945-63.944,55.259-64,97.621v128C42.737,464.214,90.452,511.93,149.333,512h213.333   c58.881-0.07,106.596-47.786,106.667-106.667v-128C469.278,234.971,444.159,196.657,405.333,179.712z M277.333,362.667   c0,11.782-9.551,21.333-21.333,21.333c-11.782,0-21.333-9.551-21.333-21.333V320c0-11.782,9.551-21.333,21.333-21.333   c11.782,0,21.333,9.551,21.333,21.333V362.667z M362.667,170.667H149.333v-21.333c0-58.91,47.756-106.667,106.667-106.667   s106.667,47.756,106.667,106.667V170.667z"></path>
								</g>
							</svg></i><span class="mbcv-buttons-text">Ашу</span></div>
				</div>
				<div class="mb-card-desc">
					<h3 class="mbc-desc-title">№10 сабақ.</h3>
					<h2 class="mbc-desc-name">Главная вкладкасындағы құрал-саймандармен жұмыс жасап үйрену.</h2>
				</div>
				<div class="mb-card-materials">
					<ul class="mbc-materials-list">
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="#">Лекция</a></li>
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="#">Презентация</a></li>
						<li class="mbcm-list-item"><a class="mbcml-item-link" href="#">Практикалық жұмыс</a></li>
					</ul>
				</div>
				<div class="mb-card-homework"><a class="mbc-homework-test" href="#">ТЕСТ №10</a><span class="mbc-homework-score">0%</span></div>
			</div>
		</div>
	</div>
</main>

<!-- VIDEO-->
<section class="video d-none">
	<div class="video-in">
		<h3 class="video-title">№1 сабақ. Excel-мен танысу. Интерфейс. Ұяшықтар.</h3>
		<video class="video-js vjs-theme-sea" id="my-video" controls="" preload="auto" poster="{{ asset('img/U1.jpg') }}" data-setup='{"playbackRates": [0.5, 1, 1.5, 2]}'>
			<source src="" type="video/mp4">
			<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that<a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
		</video>
		<div class="video-close demo-close">
			<svg width="40" height="40" viewbox="0 -0.5 8 8" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#fff">
				<defs></defs>
				<g id="Page-1" stroke="none" stroke-width="1">
					<g id="Dribbble-Light-Preview" transform="translate(-385.000000, -206.000000)" fill="#fff">
						<g id="icons" transform="translate(56.000000, 160.000000)">
							<polygon id="close_mini-[#1522]" points="334.6 49.5 337 51.6 335.4 53 333 50.9 330.6 53 329 51.6 331.4 49.5 329 47.4 330.6 46 333 48.1 335.4 46 337 47.4"></polygon>
						</g>
					</g>
				</g>
			</svg>
		</div>
	</div>
</section>

<script>
	$(function(){

	  var player = videojs('my-video');

	  player.landscapeFullscreen({
	    fullscreen: {
	      enterOnRotate: true,
	      exitOnRotate: true,
	      alwaysInLandscapeMode: true,
	      iOS: true
	    }
	  });

		player.src({
	        src: "{{ route('video.demo') }}.mp4",
	        type: 'video/mp4'
	    });

		$('.demo-close').on('click', function(){
			videojs('my-video').pause();
			$('.video').addClass('d-none');
			$('body').removeClass('o-h');
		})

	})
</script>

<!-- TEST-->
<section class="test d-none">
	<div class="test-in">
		<div class="test-card">
			<div class="test-card-in">
				<div class="test-card-top">
					<div class="tc-top-left">ТЕСТ №1</div>
					<div class="tc-top-right">Сұрақ 3/10</div>
				</div>
				<div class="test-card-head">
					<h2>You can create a custom button that stops the video playback and resets it to the beginning.?</h2>
				</div>
				<div class="test-card-body"><label><input type="radio" name="answer" value="a"><i class="test-tick"></i><span class="test-answer">A) Program</span></label><label><input type="radio" name="answer" value="b"><i class="test-tick"></i><span class="test-answer">B) Computer science</span></label><label><input type="radio" name="answer" value="c"><i class="test-tick"></i><span class="test-answer">C) Cool guy</span></label><label><input type="radio" name="answer" value="d"><i class="test-tick"></i><span class="test-answer">D) Definition of art definition of art</span></label></div>
				<div class="test-card-footer"><button class="tc-footer-btn tc-footer-btn_first"><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewbox="0 0 24 24" fill="#fff">
							<path d="M11,23.94L.89,14.13C.31,13.55,0,12.79,0,11.99,0,11.19,.31,10.43,.88,9.87h0S11,.06,11,.06V6.99h13v10H11v6.95Z"></path>
						</svg></button><button class="tc-footer-btn">OK</button></div>
			</div>
			<div class="test-close"><svg viewbox="0 -0.5 8 8" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					<defs></defs>
					<g id="Page-1" stroke="none" stroke-width="1">
						<g id="Dribbble-Light-Preview" transform="translate(-385.000000, -206.000000)" fill="#808080">
							<g id="icons" transform="translate(56.000000, 160.000000)">
								<polygon id="close_mini-[#1522]" points="334.6 49.5 337 51.6 335.4 53 333 50.9 330.6 53 329 51.6 331.4 49.5 329 47.4 330.6 46 333 48.1 335.4 46 337 47.4"></polygon>
							</g>
						</g>
					</g>
				</svg></div>
		</div>
	</div>
</section>
@endsection