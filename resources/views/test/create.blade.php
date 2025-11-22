@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	<h1 class="mb-3 text-center">Создать тест</h1>
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
					<label for="level">Уровень</label>
					<input type="text" name="level" value="{{ old('level') }}" class="form-control" id="level" placeholder="Уровень">

					@error('level')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group mb-3">
					<label for="pass">Проходной балл</label>
					<input type="text" name="pass" value="{{ old('pass') }}" class="form-control" id="pass" placeholder="Проходной балл">

					@error('pass')
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