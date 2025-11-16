@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	<h1 class="mb-3 text-center">Видео-уроки</h1>
        	<div class="mb-3 ms-3">
				<a href="{{ route('video.create') }}" class="btn btn-primary mb-3">Добавить</a>
			</div>
            <div class="container">
            	<div class="row justify-content-start">
            		@foreach($videos as $video)
            		<div class="col-5 mb-4">
            			<div class="card pb-3" style="width: 18rem;">
							<img src="{{ asset('img/' . $video->poster . '.jpg') }}" class="card-img-top" alt="{{ $video->name }}">
							<div class="card-body">
								<h5 class="card-title">{{ $video->name }}</h5>
								<p class="card-text">{{ $video->description }}</p>
								<a class="link-primary" href="{{ asset($video->lecture) }}">Лекция</a><br>
								<a class="link-primary" href="{{ asset($video->presentation) }}">Презентация</a><br>
								<a class="link-primary" href="{{ asset($video->practice) }}">Практика</a>
							</div>
							<div class="ms-3">
								<a href="{{ route('video.edit', $video->id) }}" class="btn btn-secondary mb-3">Изменить</a>
							</div>
							<form action="{{ route('video.delete', $video->id) }}" method="post">
								@csrf
								@method('delete')
								<input type="submit" value="Удалить" class="btn btn-danger ms-3">
							</form>
						</div>
            		</div>
            		@endforeach
            	</div>
            </div>
        </div>
    </div>
</div>
@endsection