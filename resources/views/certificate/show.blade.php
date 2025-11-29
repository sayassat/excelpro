@extends('layouts.site')

@section('certificate-styles')
<style>
  .certificate-outer {
    display: flex;
    justify-content: center;
    margin-top: 115px;
    margin-bottom: 20px;
    padding: 0 20px;
  }
  .certificate {
    font-family: DejaVu Sans, sans-serif !important;
    font-size: 12px;
    width: 960px;
    height: 636px;
    padding: 15px 25px;
    border: 10px solid #1D6F42;
    overflow: hidden;
  }
  .certificate-header {
    display: flex;
    justify-content: space-between;
    height: 80px;
    margin-bottom: 42px;
  }
  .certificate-header-logo {
    font-weight: bold;
    font-size: 20px;
  }
  .certificate-header-link {
    font-size: 18px;
  }
  .certificate-main {
    margin-bottom: 100px;
    text-align: center;
  }
  .certificate-main-heading {
    margin-bottom: 30px;
    color: #1D6F42;
    font-size: 55px;
    font-weight: bold;
  }
  .certificate-main-text {
    margin: 15px 0;
    font-size: 23px;
  }
  .certificate-main-name {
    margin: 12px 0;
    font-size: 33px;
    font-style: italic;
  }
  .certificate-main-title {
    margin-top: 35px;
    font-size: 33px;
  }
  .certificate-footer-date {
    text-align: center;
    font-size: 20px;
  }
  .certificate-footer-instructor {
    float: left;
    margin-left: 550px;
    font-size: 20px;
  }
  .cf-instructor-details {
    float: left;
  }
  .cf-instructor-signature {
    float: left;
    width: 37px;
    height: 70px;
    margin-left: 17px;
    margin-right: 31px;
    img {
      display: block;
      width: 100%;
      height: 100%;
    }
  }
  .certificate-download {
    display: flex;
    justify-content:center;
    margin-bottom: 70px;
  }
  .certificate-download a.certificate-link {
    font-size: 16px;
  }
  .modal-cert {
    margin-top: 115px;
    margin-bottom: 50px;
    padding: 0 15px;
    font-size: 18px;
    text-align: center;
  }
  .mc-form-title {
    margin-bottom: 15px;
  }
  .mc-form-fullname {
    width: 100%;
    max-width: 450px;
    font-size: 20px;
    margin-bottom: 15px;
    padding: 5px 10px;
    border: 2px solid #1D6F42;
    border-radius: 5px;
  }
  .mc-form-btn {
    padding: 5px 10px;
    display: inline-block;
    border-radius: 6px;
    font-size: 16px;
    background-color: #808080;
    color: #fff;
  }

  @media (max-width: 820px) {
    .certificate {
      width: calc(100% - 40px);
      height: 500px;
    }
    .certificate-header {
      height: 46px;
    }
    .certificate-main {
      margin-bottom: 66px;
    }
    .certificate-main-heading {
      margin-bottom: 20px;
      font-size: 40px;
    }
    .certificate-main-text {
      margin: 10px 0;
      font-size: 19px;
    }
    .certificate-main-name {
      margin: 10px 0;
      font-size: 28px;
    }
    .certificate-main-title {
      margin-top: 20px;
      font-size: 26px;
    }
    .certificate-footer-date {
      font-size: 14px;
    }
    .certificate-header-logo {
      font-size: 16px;
    }
    .certificate-header-link {
      font-size: 14px;
    }
  }

  @media (max-width: 700px) {
    .certificate-outer {
      justify-content: left;
      margin-top: 85px;
      margin-bottom: 10px;
    }
    .certificate {
      flex-shrink: 0;
      flex-grow: 0;
      width: 566px;
      height: 406px;
      padding: 10px 18px;
      border: 6px solid #1D6F42;
    }
    .certificate-header {
      height: 36px;
    }
    .certificate-header-logo {
      font-size: 14px;
    }
    .certificate-header-link {
      font-size: 12px;
    }
    .certificate-main-heading {
      margin-bottom: 16px;
      font-size: 30px;
    }
    .certificate-main-text {
      margin: 7px 0;
      font-size: 16px;
    }
    .certificate-main-name {
      margin: 7px 0;
      font-size: 22px;
    }
    .certificate-main-title {
      margin-top: 14px;
      font-size: 20px;
    }
    .certificate-footer-date {
      font-size: 14px;
    }
    .certificate-header-logo {
      font-size: 16px;
    }
    .certificate-header-link {
      font-size: 14px;
    }
    .certificate-download {
      justify-content: left;
      margin-bottom: 40px;
      padding: 10px 18px;
    }
    .certificate-download a.certificate-link {
      font-size: 12px;
    }
  }
</style>
@endsection

@section('content')

@if($certificate->full_name)
<div class="certificate-outer">
  <div class="certificate">
    <div class="certificate-header">
      <div class="certificate-header-logo">
        <span style="color: #1D6F42">EXCEL</span><span style="color: #515151">PRO</span><span style="color: #1D6F42">.KZ</span>
      </div>
      <div class="certificate-header-link">
        <strong>Ссылка на сертификат:</strong> <br>
        excelpro.kz/c/{{ $certificate->certificate_number }}
      </div>
    </div>
    <div class="certificate-main">
      <div class="certificate-main-heading">СЕРТИФИКАТ</div>
      <div class="certificate-main-text">Данный сертификат подтверждает, что</div>
      <div class="certificate-main-name">{{ $certificate->full_name }}</div>
      <div class="certificate-main-text">успешно завершил(-а) онлайн курс</div>
      <div class="certificate-main-title">Microsoft Excel: от простого к сложному</div>
    </div>
    <div class="certificate-footer">
      @php
          Carbon\Carbon::setLocale('ru');
          $issued_date = \Carbon\Carbon::create($certificate->issued_at);
      @endphp
      <div class="certificate-footer-date">{{ mb_convert_case($issued_date->translatedFormat('F Y'), MB_CASE_TITLE, 'UTF-8') }}</div>
    </div>
  </div>
</div>

<div class="certificate-download">
  <a class="certificate-link" href="/c/{{ $certificate->certificate_number }}.pdf">Сертификатты жүктеу / Скачать сертификат</a>
</div>

@else

<div class="wrapper">
  <div class="modal-cert">
    <form class="modal-cert-form" action="{{ route('certificate.full_name') }}" method="post">
      @csrf
      <h2 class="mc-form-title">Сертификатта көрсетілетін толық аты-жөніңізді жазыңыз:</h2>
      <input type="text" class="mc-form-fullname" name="full_name" autofocus>
      <input type="hidden" class="mc-form-certificate" name="certificate_id" value="{{ $certificate->id }}">
      <br>
      <button class="mc-form-btn">Сақтау</button>
    </form>
  </div>
</div>

@endif

@endsection