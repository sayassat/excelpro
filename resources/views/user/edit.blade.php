@extends('layouts.site')

@section('content')
<div class="wrapper" style="margin-top: 100px; margin-bottom: 30px; font-size: 16px;">
  <h3 style="margin-bottom: 20px; font-size: 18px;">Профильге өзгеріс енгізу</h3>

<form action="{{ route('user.update') }}" method="POST">
    @csrf
    @method('PATCH')

    <input style="border: 1px solid #000; font-size: 18px; margin-bottom: 10px;" type="text" name="name" value="{{ $user->name }}"><br>
    <input style="border: 1px solid #000; font-size: 18px; margin-bottom: 10px;" type="text" name="full_name" value="{{ $user->full_name }}"><br>

    <button type="submit" style="border: 1px solid #000; font-size: 18px">Сақтау</button><br><br>
    <a href="{{ route('user.show') }}">Артқа</a>
</form>

</div>
@endsection