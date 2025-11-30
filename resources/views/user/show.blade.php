@extends('layouts.site')

@section('content')
<div class="wrapper user-outer">
  <h2 class="user-heading">Профиль</h2>
  <ul class="user-list">
    <li class="user-list-item">
      <strong>Аты:</strong>
      <span>{{ $user->name }}</span>
    </li>
    <li class="user-list-item">
      <strong>Email адресі:</strong>
      <span>{{ $user->email }}</span>
    </li>
    <li class="user-list-item">
      <strong>Телефоны:</strong>
      <span>{{ $user->phone }}</span>
    </li>
    <li class="user-list-item">
      <strong>Тіркелген күні:</strong>
      <span>{{ \Carbon\Carbon::parse($user->registered_date)->translatedFormat('d F Y') }}</span>
    </li>
    <li class="user-list-item">
      <strong>Сертификаттары:</strong>
      @if($user->certificates->isEmpty())
          <span>Әзірге жоқ</span>
      @else
          @foreach($user->certificates as $certificate)
              <a class="ul-item-link" href="{{ route('certificate.show', $certificate->id) }}">{{ $certificate->title }}</a>
          @endforeach
      @endif
    </li>
  </ul>
  <div class="user-buttons">
    <a class="user-buttons-btn" href="{{ route('main') }}">
      <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewbox="0 0 24 24" fill="#fff"><path d="M11,23.94L.89,14.13C.31,13.55,0,12.79,0,11.99,0,11.19,.31,10.43,.88,9.87h0S11,.06,11,.06V6.99h13v10H11v6.95Z"></path></svg>
    </a>
    <a class="user-buttons-btn user-buttons-btn_change" href="{{ route('user.edit') }}">Өзгерту</a>
  </div>
</div>
@endsection