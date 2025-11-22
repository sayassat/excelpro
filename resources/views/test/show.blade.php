@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <h2 class="mb-3 text-center">Тест №{{ $test->test_number }}</h2>

<div class="card mb-3">
  <ul class="list-group list-group-flush mb-3">
    <li class="list-group-item"><strong>Уровень:</strong> {{ $test->level }}</li>
    <li class="list-group-item"><strong>Проходной балл:</strong> {{ $test->pass }}</li>
  </ul>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
      <a class="btn btn-primary" href="{{ route('test.edit', $test->id) }}">Изменить</a>
      <a class="btn btn-secondary ms-3" href="{{ route('test.index') }}">Назад</a>
      <a href="{{ route('question.create', $test->id) }}" class="btn btn-success ms-3">Добавить вопрос</a>
    </li>
    <li class="list-group-item">
      <form action="{{ route('test.delete', $test->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Удалить" class="btn btn-danger">
      </form>
    </li>
  </ul>
</div>

@foreach($test->questions as $question)

<div class="card mb-3">
  <div class="card-header">
    <strong>Вопрос №{{ $question->question_number }}.</strong> <br>{{ $question->question }}
  </div>
  <ul class="list-group list-group-flush mb-3">
    <li class="list-group-item"><strong>Ответ A:</strong> {{ $question->answer_a }}</li>
    <li class="list-group-item"><strong>Ответ B:</strong> {{ $question->answer_b }}</li>
    <li class="list-group-item"><strong>Ответ C:</strong> {{ $question->answer_c }}</li>
    <li class="list-group-item"><strong>Ответ D:</strong> {{ $question->answer_d }}</li>
  </ul>
  <ul class="list-group list-group-flush mb-3">
    <li class="list-group-item"><strong>Правильный ответ: </strong> {{ $question->correct_answer }}</li>
  </ul>
  <ul class="list-group list-group-flush">
    <li class="list-group-item d-flex align-items-center">
      <a class="link-primary" href="{{ route('question.edit', $question->id) }}">Изменить</a>
      <form action="{{ route('question.delete', $question->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-link">Удалить</button>
        {{-- <input type="submit" value="Удалить" class="link link-danger"> --}}
      </form>
    </li>
  </ul>
</div>

@endforeach

</div>
      </div>
    </div>
</div>
@endsection