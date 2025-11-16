@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	<h1 class="mb-3 text-center">Создать вопрос</h1>
			<form action="{{ route('test.store') }}" method="post">
				@csrf
				<div class="form-group mb-3">
					<label for="test_number">Номер теста</label>
					<input type="text" name="test_number" value="{{ old('test_number') }}" class="form-control" id="test_number" placeholder="Номер теста">

					@error('test_number')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group mb-3">
					<label for="question_number">Номер вопроса</label>
					<input type="text" name="question_number" value="{{ old('question_number') }}" class="form-control" id="question_number" placeholder="Номер вопроса">

					@error('question_number')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group mb-3">
					<label for="question">Описание вопроса</label>
					<input type="text" name="question" value="{{ old('question') }}" class="form-control" id="question" placeholder="Описание вопроса">

					@error('question')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group mb-3">
					<label for="answer_a">A</label>
					<input type="text" name="answer_a" value="{{ old('answer_a') }}" class="form-control" id="answer_a" placeholder="Ответ А">

					@error('answer_a')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group mb-3">
					<label for="answer_b">B</label>
					<input type="text" name="answer_b" value="{{ old('answer_b') }}" class="form-control" id="answer_b" placeholder="Ответ B">

					@error('answer_b')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group mb-3">
					<label for="answer_c">C</label>
					<input type="text" name="answer_c" value="{{ old('answer_c') }}" class="form-control" id="answer_c" placeholder="Ответ C">

					@error('answer_c')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group mb-3">
					<label for="answer_d">D</label>
					<input type="text" name="answer_d" value="{{ old('answer_d') }}" class="form-control" id="answer_d" placeholder="Ответ D">

					@error('answer_d')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group mb-3">
					<label for="correct_answer">Правильный ответ</label>
					<input type="text" name="correct_answer" value="{{ old('correct_answer') }}" class="form-control" id="correct_answer" placeholder="Правильный ответ">

					@error('correct_answer')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="mt-4">
					<button type="submit" class="btn btn-primary">Создать</button>
					<a href="{{ route('test.index') }}" class="btn btn-secondary ms-3">Назад</a>
				</div>
			</form>
        </div>
    </div>
</div>
@endsection