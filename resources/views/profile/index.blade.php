@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	<h1 class="mb-3 text-center">Профили</h1>
            <div class="mb-5 ms-3">
                <a href="#" class="btn btn-primary">Добавить</a>
                <a class="btn btn-secondary ms-3" href="{{ route('home') }}">Назад</a>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">ID</th>
                  <th scope="col">Имя</th>
                  <th scope="col">Полное имя</th>
                  <th scope="col">Email</th>
                  <th scope="col">Роль</th>
                  <th scope="col">Дата регистрации</th>
                  <th scope="col">Сертификаты</th>
                </tr>
              </thead>
              <tbody>
                @foreach($profiles as $profile)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $profile->id }}</td>
                  <td>{{ $profile->name }}</td>
                  <td>{{ $profile->full_name }}</td>
                  <td>{{ $profile->email }}</td>
                  <td>{{ $profile->role }}</td>
                  <td>{{ $profile->registered_date }}</td>
                  <td>
                    @if($profile->certificates->isEmpty())
                        
                    @else
                        @foreach($profile->certificates as $certificate)
                            <span>{{ $certificate->title }}</span><br>
                        @endforeach
                    @endif
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
</div>
@endsection