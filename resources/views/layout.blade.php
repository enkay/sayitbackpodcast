<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
				<title>SAY IT BACK PODCAST</title>

				<link rel="preconnect" href="https://fonts.googleapis.com">
				<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
				<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet">
        <link href="{{ cachebust('/css/app.css') }}" rel="stylesheet">
				<link rel="shortcut icon" href="/images/favicon.png" type="image/png" />

				<link type="application/rss+xml" rel="alternate" title="Say It Back" href="https://anchor.fm/s/6dab07d0/podcast/rss"/>
				
				@include('layout.meta')
    </head>
    <body class="px-4 py-8 font-sans text-lg antialiased text-black">
			<div id="app">
				@include('layout.header')
				<main class="max-w-lg mx-auto">
					@yield('content')
				</main>
				@include('layout.footer')
			</div>
			<script src="{{ cachebust('/js/app.js') }}"></script>
			@include('plugins/google-analytics')
    </body>
</html>
