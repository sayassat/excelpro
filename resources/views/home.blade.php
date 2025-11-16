@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('video.index') }}">Видео-уроки</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('test.index') }}">Тесты</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile.index') }}">Профили</a>
                      </li>
                    </ul>
                </div>
            </div>
            <div class="container mt-3">
                <a class="btn btn-secondary" href="{{ route('main') }}">На главную</a>
            </div>
        </div>
    </div>
</div>
@endsection
