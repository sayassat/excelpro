var windowW = window.innerWidth;
var windowH = window.innerHeight;
var windowRatio = innerWidth / innerHeight;

$(function(){

  // HEADER HANDLERS

	$(".header-menu-btn").on("click", function(){
		if ($(".header-menu-list").hasClass("d-none")){
			$(".header-menu-list").removeClass("d-none");
			$(".icon-triangle").removeClass("rotated");
		} else {
			$(".header-menu-list").addClass("d-none");
			$(".icon-triangle").addClass("rotated");
		}
	})

	// START PAGE DEMO VIDEO

	$("#video_1").on('click', function(){
		$('body').addClass('o-h');
		if (windowRatio > 1.777777777777778) {
			$('#my-video').css('height', windowH * 0.8 + 'px');
			$('#my-video').css('width', windowH * 1.777777777777778 * 0.8 + 'px');
		} else {
			$('#my-video').css('width', windowW + 'px');
			$('#my-video').css('height', windowW / 1.777777777777778 + 'px');
		}
		$('.video').removeClass('d-none');
		videojs('my-video').play();
	})

	$('.video-in video').on('mousemove', function(event){
		$('.video-title').stop(true, true).fadeIn( "slow", "linear" );
		setTimeout(function(){
			$('.video-title').fadeOut( "slow", "linear" );
		},2500)
	})

	// AUTHORZIED ALL VIDEOS

	// $(".mb-card-video_main").on('click', function(){
	// 	$('body').addClass('o-h');
	// 	if (windowRatio > 1.777777777777778) {
	// 		$('#my-video').css('height', windowH * 0.8 + 'px');
	// 		$('#my-video').css('width', windowH * 1.777777777777778 * 0.8 + 'px');
	// 	} else {
	// 		$('#my-video').css('width', windowW + 'px');
	// 		$('#my-video').css('height', windowW / 1.777777777777778 + 'px');
	// 	}
	// 	$('.video').removeClass('d-none');
	// 	videojs('my-video').play();
	// })

	// $('.video-close').on('click', function(){
	// 	videojs('my-video').pause();
	// 	$('.video').addClass('d-none');
	// 	$('body').removeClass('o-h');
	// })

	// $('.video-in').on('mousemove', function(event){
	// 	event.stopPropagation();
	// 	$('.video-close').fadeIn( "slow", "linear" );
	// 	setTimeout(function(){
	// 		$('.video-close').fadeOut( "slow", "linear" );
	// 	},2500)
	// })


 // TEST HANDLERS

	$("#test1").on('click', function(){
		$('body').addClass('o-h');
		if (windowRatio > 1.777777777777778) {
			$('#my-video').css('height', windowH + 'px');
			$('#my-video').css('width', windowH * 1.777777777777778 + 'px');
		} else {
			$('#my-video').css('width', windowW + 'px');
			$('#my-video').css('height', windowW / 1.777777777777778 + 'px');
		}
		$('.test').removeClass('d-none');
	})

	$('.test-close').on('click', function(){
		$('.test').addClass('d-none');
		$('body').removeClass('o-h');
	})

	// $(document).ready(function() {
	//   $('.video-in video').hover(
	//     function() {
	//       $('.video-title').stop(true, true).fadeIn('fast');
	//     },
	//     function() {
	//       setTimeout(function() {
	//         $('.video-title').fadeOut('slow');
	//       }, 2000); // 1 second delay before fade out
	//     }
	//   );
	// });

})