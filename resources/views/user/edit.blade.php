@extends('layouts.site')

@section('content')
<div class="wrapper user-outer">
  <h2 class="user-heading">Профильге өзгеріс енгізу</h2>
  <form action="{{ route('user.update') }}" method="POST">
    @csrf
    @method('PATCH')
    <ul class="user-list user-list_edit">
      <li class="user-list-item">
        <input class="ul-item-input" type="text" name="name" value="" placeholder="Атыңыз" autofocus>
      </li>
      <li class="user-list-item">
        <input class="ul-item-input ul-item-input_phone" type="text" name="phone" value="" placeholder="Телефон нөміріңіз">
      </li>
    </ul>
    <div class="user-buttons user-buttons_edit">
      <a class="user-buttons-btn" href="{{ route('user.show') }}">
        <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewbox="0 0 24 24" fill="#fff"><path d="M11,23.94L.89,14.13C.31,13.55,0,12.79,0,11.99,0,11.19,.31,10.43,.88,9.87h0S11,.06,11,.06V6.99h13v10H11v6.95Z"></path></svg>
      </a>
      <button class="user-buttons-btn" type="submit">Сақтау</button>
    </div>
  </form>
</div>
@endsection