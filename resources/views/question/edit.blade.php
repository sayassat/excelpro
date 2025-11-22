@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	<h1 class="mb-3 text-center">Вопрос №{{ $question->question_number }}</h1>
			<form action="{{ route('question.update', $question->id) }}" method="post">
				@csrf
				@method('patch')
				<div class="form-group mb-3">
					<label for="question_number">Номер вопроса</label>
					<input type="text" name="question_number" value="{{ $question->question_number }}" class="form-control" id="question_number" placeholder="Номер вопроса">

					@error('question_number')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group mb-3">
					<label for="question">Описание вопроса</label>
					<input type="text" name="question" value="{{ $question->question }}" class="form-control" id="question" placeholder="Описание вопроса<">

					@error('question')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group mb-3">
					<label for="answer_a">A</label>
					<input type="text" name="answer_a" value="{{ $question->answer_a }}" class="form-control" id="answer_a" placeholder="Ответ А">

					@error('answer_a')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group mb-3">
					<label for="answer_b">B</label>
					<input type="text" name="answer_b" value="{{ $question->answer_b }}" class="form-control" id="answer_b" placeholder="Ответ B">

					@error('answer_b')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group mb-3">
					<label for="answer_c">C</label>
					<input type="text" name="answer_c" value="{{ $question->answer_c }}" class="form-control" id="answer_c" placeholder="Ответ C">

					@error('answer_c')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group mb-3">
					<label for="answer_d">D</label>
					<input type="text" name="answer_d" value="{{ $question->answer_d }}" class="form-control" id="answer_d" placeholder="Ответ D">

					@error('answer_d')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group mb-3">
					<label for="correct_answer">Правильный ответ</label>
					<input type="text" name="correct_answer" value="{{ $question->correct_answer }}" class="form-control" id="correct_answer" placeholder="Правильный ответ">

					@error('correct_answer')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="mt-4">
					<button type="submit" class="btn btn-primary">Обновить</button>
					<a href="{{ route('test.show', $question->test_id) }}" class="btn btn-secondary ms-3">Назад</a>
				</div>
			</form>
        </div>
    </div>
</div>
@endsection