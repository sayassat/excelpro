<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EXCELPRO</title>
	<style>
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
			height: 80px;
			margin-bottom: 42px;
		}
		.certificate-header-logo {
			float: left;
			font-weight: bold;
			font-size: 20px;
		}
		.certificate-header-link {
			float: left;
			margin-left: 550px;
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
	</style>
</head>
<body>
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
</body>
</html>