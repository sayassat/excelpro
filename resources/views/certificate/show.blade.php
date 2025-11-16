@extends('layouts.site')

@section('content')
<div class="wrapper" style="margin-top: 100px; margin-bottom: 30px; font-size: 16px;">
  <h3 style="margin-bottom: 20px;">Сертификат</h3>
  <ul>
    <li>
      <strong>Выдано:</strong>
      <span>{{ $user->full_name }}</span>
    </li>
    <li>
      <strong>Название курса:</strong>
      <span>{{ $certificate->title }}</span>
    </li>
    <li>
      <strong>Номер сертификата:</strong>
      <span>{{ $certificate->certificate_number }}</span>
    </li>
  </ul>
  <div>
    <a style="margin-top: 20px; color: blue;" href="{{ route('user.show') }}">Артқа</a>
  </div>
</div>
@endsection