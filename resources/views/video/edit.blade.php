@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	<h1 class="mb-3 text-center">{{ $video->name }}</h1>
			<form action="{{ route('video.update', $video->id) }}" method="post">
				@csrf
				@method('patch')
				<div class="form-group mb-3">
					<label for="name">Название</label>
					<input type="text" name="name" value="{{ $video->name }}" class="form-control" id="name" placeholder="Название">

					@error('name')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group mb-3">
					<label for="description">Описание</label>
					<textarea name="description" class="form-control" id="description" placeholder="Описание">{{ $video->description }}</textarea>

					@error('description')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group mb-3">
					<label for="location">Расположение</label>
					<input type="text" name="location" value="{{ $video->location }}" class="form-control" id="location" placeholder="Расположение">

					@error('location')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group mb-3">
					<label for="poster">Постер</label>
					<input type="text" name="poster" value="{{ $video->poster }}" class="form-control" id="poster" placeholder="Постер">

					@error('poster')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group mb-3">
					<label for="lecture">Лекция</label>
					<input type="text" name="lecture" value="{{ $video->lecture }}" class="form-control" id="lecture" placeholder="Лекция">

					@error('lecture')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group mb-3">
					<label for="presentation">Презентация</label>
					<input type="text" name="presentation" value="{{ $video->presentation }}" class="form-control" id="presentation" placeholder="Презентация">

					@error('presentation')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group mb-3">
					<label for="practice">Практика</label>
					<input type="text" name="practice" value="{{ $video->practice }}" class="form-control" id="practice" placeholder="Практика">

					@error('practice')
					<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="mt-4">
					<button type="submit" class="btn btn-primary">Обновить</button>
					<a href="{{ url()->previous() }}" class="btn btn-secondary ms-3">Назад</a>
				</div>
			</form>
        </div>
    </div>
</div>
@endsection