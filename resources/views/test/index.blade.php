@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	<h1 class="mb-3 text-center">Тесты</h1>
        	<div class="mb-5 ms-3">
				<a href="{{ route('test.create') }}" class="btn btn-primary">Добавить</a>
                <a class="btn btn-secondary ms-3" href="{{ route('home') }}">Назад</a>
			</div>
            <div class="container">
            	<div class="row justify-content-start">
            		<div class="col-5 mb-4">
            			@foreach($tests as $test)
            			<a class="link-primary" href="{{ route('test.show', $test->id) }}">Тест №{{ $test->test_number }}. Вопрос №{{ $test->question_number }}</a><br>
            			@endforeach
            		</div>
            	</div>
            </div>
        </div>
    </div>
</div>
@endsection