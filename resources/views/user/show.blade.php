@extends('layouts.site')

@section('content')
<div class="wrapper" style="margin-top: 100px; margin-bottom: 30px; font-size: 16px;">
  <h3 style="margin-bottom: 20px;">Профиль</h3>
  <ul>
    <li>
      <strong>Аты:</strong>
      <span>{{ $user->name }}</span>
    </li>
    <li>
      <strong>Толық аты-жөні:</strong>
      <span>{{ $user->full_name }}</span>
    </li>
    <li>
      <strong>Email адрес:</strong>
      <span>{{ $user->email }}</span>
    </li>
    <li>
      <strong>Тіркелген күні:</strong>
      <span>{{ \Carbon\Carbon::parse($user->registered_date)->translatedFormat('d F Y') }}</span>
    </li>
    <li>
      <strong>Сертификаттары:</strong><br>
      @if($user->certificates->isEmpty())
          <span>Әзірге жоқ</span>
      @else
          @foreach($user->certificates as $certificate)
              <a style="color: blue;" href="{{ route('certificate.show', $certificate->id) }}">{{ $certificate->title }}</a><br>
          @endforeach
      @endif
    </li>
  </ul>
  <div>
    <a href="{{ route('user.edit') }}" style="margin-top: 20px; color: blue;">Өзгерту</a>
    <br><br>
    <a href="{{ route('main') }}">Артқа</a>
  </div>
</div>
@endsection