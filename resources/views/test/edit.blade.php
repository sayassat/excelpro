@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	<h1 class="mb-3 text-center">Тест №{{ $test->test_number }}</h1>
			<form action="{{ route('test.update', $test->id) }}" method="post">
				@csrf
				@method('patch')
				<div class="form-group mb-3">
					<label for="test_number">Номер теста</label>
					<input type="text" name="test_number" value="{{ $test->test_number }}" class="form-control" id="test_number" placeholder="Номер теста">

					@error('test_number')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group mb-3">
					<label for="level">Уровень</label>
					<input type="text" name="level" value="{{ $test->level }}" class="form-control" id="level" placeholder="Уровень">

					@error('level')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group mb-3">
					<label for="pass">Проходной балл</label>
					<input type="text" name="pass" value="{{ $test->pass }}" class="form-control" id="pass" placeholder="Проходной балл">

					@error('pass')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="mt-4">
					<button type="submit" class="btn btn-primary">Обновить</button>
					<a href="{{ route('test.show', $test->id) }}" class="btn btn-secondary ms-3">Назад</a>
				</div>
			</form>
        </div>
    </div>
</div>
@endsection