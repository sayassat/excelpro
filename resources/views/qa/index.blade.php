@extends('layouts.site')

@section('content')
<div class="wrapper user-outer">
  <h2 class="user-heading">Сұрақ-жауап</h2>
  <ul class="user-list">
    <li class="user-list-item">
      <strong>Сертификатты қалау алуға болады?</strong>
      <br>
      <span>Сертификат алу үшін видео-сабақтардың барлығын көріп және тесттердің әрқайсынан кемінде 75% ұпай жинау керек. Сертификатты "Менің профилім" мәзіріне өту арқылы табуға болады.</span>
    </li>
    <li class="user-list-item">
      <strong>Сертификатты қалау алуға болады?</strong>
      <br>
      <span>Сертификат алу үшін видео-сабақтардың барлығын көріп және тесттердің әрқайсынан кемінде 75% ұпай жинау керек. Сертификатты "Менің профилім" мәзіріне өту арқылы табуға болады.</span>
    </li>
    <li class="user-list-item">
      <strong>Сертификатты қалау алуға болады?</strong>
      <br>
      <span>Сертификат алу үшін видео-сабақтардың барлығын көріп және тесттердің әрқайсынан кемінде 75% ұпай жинау керек. Сертификатты "Менің профилім" мәзіріне өту арқылы табуға болады.</span>
    </li>
  </ul>
  <div class="user-buttons">
    <a class="user-buttons-btn" href="{{ route('main') }}">
      <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewbox="0 0 24 24" fill="#fff"><path d="M11,23.94L.89,14.13C.31,13.55,0,12.79,0,11.99,0,11.19,.31,10.43,.88,9.87h0S11,.06,11,.06V6.99h13v10H11v6.95Z"></path></svg>
    </a>
  </div>
</div>
@endsection