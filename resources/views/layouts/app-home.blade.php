<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title', 'TutaPAPER')</title>
	<meta name="description" content="@yield('description', 'Temukan konten digital terbaik, download langsung setelah transaksi dan dapatkan update langsung dari pembuat atau pemilik produk.')">
	<meta name="author" content="@yield('author', 'Irfan Mahfudz Guntur')">
	<meta name="Copyright" content="DIGITAL TUTA NETWORK - mytuta.com" />
	<meta name="Keywords" content="download, aplikasi, website, source, code, laravel, eBooks, music, video, fonts, software" />
	@section('image_source')<link rel="image_src" href="{{url('/mytuta/images/tutamarket.png')}}" />@show
	@yield('meta_facebook')
	@yield('meta_twitter_card')

	<link rel="stylesheet" href="{{ asset('/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
	<link href="{{ asset('/mytuta/css/mytuta.css') }}" rel="stylesheet">
	<link href="{{ asset('/mytuta/css/footer.css') }}" rel="stylesheet">
	<link rel="shortcut icon" href="{{ asset('/mytuta/images/tutaico.png') }}" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="{{ asset('/font-awesome/css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{ asset('/bower_components/bootstrap-social/bootstrap-social.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
	@yield('script')
	</head>
<body>

	@include('layouts.menu')
	@yield('content')

<div class="container">
	<hr class="garis-lurus">
	<footer>
		<p>&copy; 2015 Company, Inc.</p>
	</footer>
</div>

	<!-- Scripts -->
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
<script src="{{ asset('/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
@yield('beranda_js')
@yield('ckeditor')
</body>
</html>
