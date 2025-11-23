var windowW = window.innerWidth;
var windowH = window.innerHeight;
var windowRatio = innerWidth / innerHeight;
var prevQuestionNumber = -1;
var nextQuestionNumber = 1;
var currentQuestionNumber = 0;
var questionResponse = {};
var testAnswers = {};
var testAnswersTemp = {};

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

 	// TEST HANDLERS

	$("[data-name='test']").on('click', function() {

		$( ".loader-container" ).show();

        var url = '/questions/' + $(this).attr('data-video-id');

        $.ajax({
	        url: url,
	        type: "GET",
	        dataType: "json",
	        success: function(response) {

        		$('#testNumber').text('ТЕСТ №' + response.questions[0].test_id);
        		$('#testQuestionNumber').text('Сұрақ ' + response.questions[0].question_number + '/' + response.questions.length);
        		$('#testQuestion').text(response.questions[0].question_number + '. ' + response.questions[0].question);
        		$('#testAnswerA').text(response.questions[0].answer_a);
        		$('#testAnswerB').text(response.questions[0].answer_b);
        		$('#testAnswerC').text(response.questions[0].answer_c);
        		$('#testAnswerD').text(response.questions[0].answer_d);

        		if (nextQuestionNumber == response.questions.length) {
					$('#testNextPage').addClass('d-none');
					$('#testFinish').removeClass('d-none');
				}

        		questionResponse = response;

				$( ".loader-container" ).fadeOut( "slow" );

	        },
	        error: function(xhr){
	            console.log("Error loading page:", xhr);
	            $('.test').addClass('d-none');
				$( ".loader-container" ).fadeOut( "slow" );
				$('body').removeClass('o-h');
	        }
	    });

		$('body').addClass('o-h');
		$('.test').removeClass('d-none');
	});

	$(document).on('click', '[data-name="test-option"]', function() {

		testAnswers[currentQuestionNumber + 1] = $(this).find('[data-name="test-option-value"]').text();
		testAnswersTemp[currentQuestionNumber + 1] = $(this).attr('data-test-label');
	});

	$(document).on('click', '#testNextPage', function() {

		$('#testQuestionNumber').text('Сұрақ ' + questionResponse.questions[nextQuestionNumber].question_number + '/' + questionResponse.questions.length);
    	$('#testQuestion').text(questionResponse.questions[nextQuestionNumber].question_number + '. ' + questionResponse.questions[nextQuestionNumber].question);
		$('#testAnswerA').text(questionResponse.questions[nextQuestionNumber].answer_a);
		$('#testAnswerB').text(questionResponse.questions[nextQuestionNumber].answer_b);
		$('#testAnswerC').text(questionResponse.questions[nextQuestionNumber].answer_c);
		$('#testAnswerD').text(questionResponse.questions[nextQuestionNumber].answer_d);

		currentQuestionNumber = nextQuestionNumber;

		$('input[name="answer"]').prop('checked', false);

		for (var key in testAnswersTemp) {
			if (key == (currentQuestionNumber + 1)) {

				$('[data-name="test-option"]').each(function(index, element){

		        	if ($(element).attr('data-test-label') == testAnswersTemp[key]) {

		        		$(element).find('input').prop('checked', true);
		        	}
				})
			}
		}

		prevQuestionNumber = prevQuestionNumber + 1;
		nextQuestionNumber = nextQuestionNumber + 1;

		if (prevQuestionNumber == -1) {
			$('#testPrevPage').addClass('d-none');
		} else {
			$('#testPrevPage').removeClass('d-none');
		}

		if (nextQuestionNumber == questionResponse.questions.length) {
			$('#testNextPage').addClass('d-none');
			$('#testFinish').removeClass('d-none');
			$('#testFinishDemo').removeClass('d-none');
		} else {
			$('#testFinish').addClass('d-none');
			$('#testFinishDemo').addClass('d-none');
			$('#testNextPage').removeClass('d-none');
		}

	});

	$(document).on('click', '#testPrevPage', function() {

		$('#testQuestionNumber').text('Сұрақ ' + questionResponse.questions[prevQuestionNumber].question_number + '/' + questionResponse.questions.length);
    	$('#testQuestion').text(questionResponse.questions[prevQuestionNumber].question_number + '. ' + questionResponse.questions[prevQuestionNumber].question);
		$('#testAnswerA').text(questionResponse.questions[prevQuestionNumber].answer_a);
		$('#testAnswerB').text(questionResponse.questions[prevQuestionNumber].answer_b);
		$('#testAnswerC').text(questionResponse.questions[prevQuestionNumber].answer_c);
		$('#testAnswerD').text(questionResponse.questions[prevQuestionNumber].answer_d);

		currentQuestionNumber = prevQuestionNumber;

		$('input[name="answer"]').prop('checked', false);

		for (var key in testAnswersTemp) {
			if (key == (currentQuestionNumber + 1)) {
				$('[data-name="test-option"]').each(function(index, element){

		        	if ($(element).attr('data-test-label') == testAnswersTemp[key]) {

		        		$(element).find('input').prop('checked', true);
		        	}
				})
			}
		}

		prevQuestionNumber = prevQuestionNumber - 1;
		nextQuestionNumber = nextQuestionNumber - 1;

		if (prevQuestionNumber == -1) {
			$('#testPrevPage').addClass('d-none');
		} else {
			$('#testPrevPage').removeClass('d-none')
		}

		if (nextQuestionNumber == questionResponse.questions.length) {
			$('#testNextPage').addClass('d-none');
			$('#testFinish').removeClass('d-none');
			$('#testFinishDemo').removeClass('d-none');
		} else {
			$('#testFinish').addClass('d-none');
			$('#testFinishDemo').addClass('d-none');
			$('#testNextPage').removeClass('d-none');
		}

	});

	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

	$('#testFinish').on('click', function() {

		$( ".loader-container" ).show();

	    $.ajax({
	        url: "/test-user/store",
	        type: "POST",
	        data: {
	            user_id: $('#testUserId').val(),
	            test_id: questionResponse.questions[0].test_id,
	            testAnswers: testAnswers,
	        },
	        success: function(response) {

	        	$('#testNumber').text('Тест №' + response.data.test_id);
	        	$('.tcr-max-score').text(Number(response.data.highest_score)*100 + '%');

	        	if (response.data.score >= response.data.pass) {
	        		$('.tcr-head-pass').text(Number(response.data.score)*100 + '%');
	        		$('.tcr-head-fail').addClass('d-none');
	        		$('.tc-result-info_fail').addClass('d-none');
	        	} else {
	        		$('.tcr-head-fail').text(Number(response.data.score)*100 + '%');
	        		$('.tcr-head-pass').addClass('d-none');
	        		$('.tc-result-info_pass').addClass('d-none');
	        		$('.tcr-info-score').text(Number(response.data.pass)*100 + '%');
	        	}

	        	$('[data-name="test-score-' + response.data.test_id + '"]').text(Number(response.data.highest_score)*100 + '%');

				$('#testQuestionNumber').addClass('d-none');
				$('#testForm').addClass('d-none');
				$('.test-card-head').addClass('d-none');
				$('.test-card-result').removeClass('d-none');
				$('.test-card-footer').addClass('d-none');

				$( ".loader-container" ).fadeOut( "slow" );

				prevQuestionNumber = -1;
				nextQuestionNumber = 1;
				currentQuestionNumber = 0;
				questionResponse = {};
				testAnswers = {};
				testAnswersTemp = {};

				// $('#testNumber').text('');
				$('#testQuestionNumber').text('');
				$('#testQuestion').text('');
				$('#testAnswerA').text('');
				$('#testAnswerB').text('');
				$('#testAnswerC').text('');
				$('#testAnswerD').text('');

				$('input[name="answer"]').prop('checked', false);

				$('#testPrevPage').addClass('d-none');
				$('#testNextPage').removeClass('d-none');
				$('#testFinish').addClass('d-none');

	        },
	        error: function(xhr) {
	            console.error("Error:", xhr.responseText);
	        }
	    });
	});

	$('[data-name="test-close"]').on('click', function() {
		$('.test').addClass('d-none');
		$('body').removeClass('o-h');

		prevQuestionNumber = -1;
		nextQuestionNumber = 1;
		currentQuestionNumber = 0;
		questionResponse = {};
		testAnswers = {};
		testAnswersTemp = {};

		$('#testNumber').text('');
		$('#testQuestionNumber').text('');
		$('#testQuestion').text('');
		$('#testAnswerA').text('');
		$('#testAnswerB').text('');
		$('#testAnswerC').text('');
		$('#testAnswerD').text('');

		$('input[name="answer"]').prop('checked', false);

		$('#testPrevPage').addClass('d-none');
		$('#testNextPage').removeClass('d-none');
		$('#testFinish').addClass('d-none');
		$('#testFinishDemo').addClass('d-none');

    	$('.tcr-max-score').text('');
    	$('.tcr-head-pass').text('');
    	$('.tcr-head-fail').removeClass('d-none');
	    $('.tc-result-info_fail').removeClass('d-none');
    	$('.tcr-head-fail').text('');
    	$('.tcr-info-score').text('');
    	$('.tcr-head-pass').removeClass('d-none');
    	$('.tc-result-info_pass').removeClass('d-none');
		$('#testQuestionNumber').removeClass('d-none');
		$('#testForm').removeClass('d-none');
		$('.test-card-head').removeClass('d-none');
		$('.test-card-result').addClass('d-none');
		$('.test-card-footer').removeClass('d-none');
	})

	// TEST DEMO

	$("[data-name='test-demo']").on('click', function() {

		$( ".loader-container" ).show();

        var url = '/questions-demo';

        $.ajax({
	        url: url,
	        type: "GET",
	        dataType: "json",
	        success: function(response) {

        		$('#testNumber').text('ТЕСТ №' + response.questions[0].test_id);
        		$('#testQuestionNumber').text('Сұрақ ' + response.questions[0].question_number + '/' + response.questions.length);
        		$('#testQuestion').text(response.questions[0].question_number + '. ' + response.questions[0].question);
        		$('#testAnswerA').text(response.questions[0].answer_a);
        		$('#testAnswerB').text(response.questions[0].answer_b);
        		$('#testAnswerC').text(response.questions[0].answer_c);
        		$('#testAnswerD').text(response.questions[0].answer_d);

        		if (nextQuestionNumber == response.questions.length) {
					$('#testNextPage').addClass('d-none');
					$('#testFinishDemo').removeClass('d-none');
				}

        		questionResponse = response;

				$( ".loader-container" ).fadeOut( "slow" );

	        },
	        error: function(xhr){
	            console.log("Error loading page:", xhr);
	            $('.test').addClass('d-none');
				$( ".loader-container" ).fadeOut( "slow" );
				$('body').removeClass('o-h');
	        }
	    });

		$('body').addClass('o-h');
		$('.test').removeClass('d-none');
	});

	$('#testFinishDemo').on('click', function() {

		$( ".loader-container" ).show();

	    $.ajax({
	        url: "/test-user-demo/show",
	        type: "POST",
	        data: {
	            test_id: questionResponse.questions[0].test_id,
	            testAnswers: testAnswers,
	        },
	        success: function(response) {

	        	$('#testNumber').text('Тест №' + response.data.test_id);

	        	if (response.data.score >= response.data.pass) {
	        		$('.tcr-head-pass').text(Number(response.data.score)*100 + '%');
	        		$('.tcr-head-fail').addClass('d-none');
	        		$('.tc-result-info_fail').addClass('d-none');
	        	} else {
	        		$('.tcr-head-fail').text(Number(response.data.score)*100 + '%');
	        		$('.tcr-head-pass').addClass('d-none');
	        		$('.tc-result-info_pass').addClass('d-none');
	        		$('.tcr-info-score').text(Number(response.data.pass)*100 + '%');
	        	}

	        	$('[data-name="test-score-' + response.data.test_id + '"]').text(Number(response.data.score)*100 + '%');

				$('#testQuestionNumber').addClass('d-none');
				$('#testForm').addClass('d-none');
				$('.test-card-head').addClass('d-none');
				$('.test-card-result').removeClass('d-none');
				$('.test-card-footer').addClass('d-none');

				$( ".loader-container" ).fadeOut( "slow" );

				prevQuestionNumber = -1;
				nextQuestionNumber = 1;
				currentQuestionNumber = 0;
				questionResponse = {};
				testAnswers = {};
				testAnswersTemp = {};

				// $('#testNumber').text('');
				$('#testQuestionNumber').text('');
				$('#testQuestion').text('');
				$('#testAnswerA').text('');
				$('#testAnswerB').text('');
				$('#testAnswerC').text('');
				$('#testAnswerD').text('');

				$('input[name="answer"]').prop('checked', false);

				$('#testPrevPage').addClass('d-none');
				$('#testNextPage').removeClass('d-none');
				$('#testFinishDemo').addClass('d-none');

	        },
	        error: function(xhr) {
	            console.error("Error:", xhr.responseText);
	        }
	    });
	});

});

$(window).on('load', function() {
	$( ".loader-container" ).fadeOut( "slow" );
	$('body').removeClass('o-h');
});






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



	          // if (response.pagination.prev_page_url){
              //   $('#testPrevPage').attr('href', response.pagination.prev_page_url).removeClass('v-hidden');
              // } else {
              // 	$('#testPrevPage').addClass('v-hidden');
              // }

              // if (response.pagination.next_page_url){
              //   $('#testNextPage').attr('href', response.pagination.next_page_url).removeClass('v-hidden');
              // } else {
              // 	$('#testNextPage').addClass('v-hidden');
              // }



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



		// if (windowRatio > 1.777777777777778) {
		// 	$('#my-video').css('height', windowH + 'px');
		// 	$('#my-video').css('width', windowH * 1.777777777777778 + 'px');
		// } else {
		// 	$('#my-video').css('width', windowW + 'px');
		// 	$('#my-video').css('height', windowW / 1.777777777777778 + 'px');
		// }