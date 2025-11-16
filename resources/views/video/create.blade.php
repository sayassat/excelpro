@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	<h1 class="mb-3 text-center">Добавить видео-урок</h1>
			<form action="{{ route('video.store') }}" method="post">
				@csrf
				<div class="form-group mb-3">
					<label for="name">Название</label>
					<input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" placeholder="Название">

					@error('name')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group mb-3">
					<label for="description">Описание</label>
					<textarea name="description" class="form-control" id="description" placeholder="Описание">{{ old('description') }}</textarea>

					@error('description')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group mb-3">
					<label for="location">Расположение</label>
					<input type="text" name="location" value="{{ old('location') }}" class="form-control" id="location" placeholder="Расположение">

					@error('location')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group mb-3">
					<label for="poster">Постер</label>
					<input type="text" name="poster" value="{{ old('poster') }}" class="form-control" id="poster" placeholder="Постер">

					@error('poster')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group mb-3">
					<label for="lecture">Лекция</label>
					<input type="text" name="lecture" value="{{ old('lecture') }}" class="form-control" id="lecture" placeholder="Лекция">

					@error('lecture')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group mb-3">
					<label for="presentation">Презентация</label>
					<input type="text" name="presentation" value="{{ old('presentation') }}" class="form-control" id="presentation" placeholder="Презентация">

					@error('presentation')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group mb-3">
					<label for="practice">Практика</label>
					<input type="text" name="practice" value="{{ old('practice') }}" class="form-control" id="practice" placeholder="Практика">

					@error('practice')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="mt-4">
					<button type="submit" class="btn btn-primary">Создать</button>
					<a href="{{ url()->previous() }}" class="btn btn-secondary ms-3">Назад</a>
				</div>
			</form>
        </div>
    </div>
</div>
@endsection