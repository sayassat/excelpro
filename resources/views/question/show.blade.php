@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <h2 class="mb-3 text-center">Тест №{{ $test->test_number }}</h2>

<div class="card">
  <div class="card-header">
    <strong>Вопрос №{{ $test->question_number }}.</strong> <br>{{ $test->question }}
  </div>
  <ul class="list-group list-group-flush mb-3">
    <li class="list-group-item"><strong>Ответ A:</strong> {{ $test->answer_a }}</li>
    <li class="list-group-item"><strong>Ответ B:</strong> {{ $test->answer_b }}</li>
    <li class="list-group-item"><strong>Ответ C:</strong> {{ $test->answer_c }}</li>
    <li class="list-group-item"><strong>Ответ D:</strong> {{ $test->answer_d }}</li>
  </ul>
  <ul class="list-group list-group-flush mb-3">
    <li class="list-group-item"><strong>Правильный ответ: </strong> {{ $test->correct_answer }}</li>
  </ul>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
      <a class="btn btn-primary" href="{{ route('test.edit', $test->id) }}">Изменить</a>
    </li>
    <li class="list-group-item">
      <form action="{{ route('test.delete', $test->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Удалить" class="btn btn-danger">
      </form>
    </li>
  </ul>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><a href="{{ route('test.index') }}">Назад</a></li>
  </ul>
</div>

      </div>
    </div>
</div>
@endsection