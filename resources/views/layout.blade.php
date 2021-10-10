<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
				<title>SAY IT BACK PODCAST - A Reality Dating Show</title>

				<link rel="preconnect" href="https://fonts.googleapis.com">
				<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
				<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet">
        <link href="{{ cachebust('/css/app.css') }}" rel="stylesheet">
				<link rel="shortcut icon" href="/images/favicon.png" type="image/png" />

				<link type="application/rss+xml" rel="alternate" title="Say It Back" href="https://anchor.fm/s/6dab07d0/podcast/rss"/>
				
				@section('meta')
					<meta property="og:url" content="{{ url()->current() }}">
					<meta property="og:title" content="SAY IT BACK PODCAST">
					<meta property="og:description" content="A Reality Dating Show. Every week, hosts Vana & Laurent send single men and women on phone dates to try and find love (or at least slide in the DMs)">
					<meta property="og:image" content="{{ asset('/images/say-it-back-meta-preview.png?v=2') }}">
				@show
    </head>
    <body class="px-4 py-8 font-sans text-lg antialiased text-black">
			<div id="app">
				@section('header')
				<header class="flex max-w-lg pb-4 mx-auto border-b border-gray-200">
					<div class="text-left">
						<a href="/" class="block mx-auto text-4xl font-extrabold tracking-tight uppercase">
							Say It Back
						</a>
						<div class="mt-0 text-sm font-bold text-black uppercase">
							A reality dating show
						</div>
					</div>
				</header>
				@show
				<main class="max-w-lg mx-auto">
					@yield('content')
				</main>
				<footer class="flex justify-center max-w-lg pt-4 mx-auto mt-8 text-xs border-t border-gray-200">
					@if(auth()->check())
						@if(auth()->user()->isAdmin())
							<a href="/admin" class="hover:underline px-2 font-bold uppercase">Admin</a>
						@endif
						<a href="{{ route('profiles.show', auth()->user()->uuid) }}" class="hover:underline px-2 font-bold uppercase">My Profile</a>
						<a href="{{ route('logout') }}" class="hover:underline px-2 font-bold uppercase">Sign out</a>
					@else
						<a href="{{ route('login') }}" class="hover:underline px-2 font-bold uppercase">Sign in</a>
					@endif
				</footer>
			</div>
			<script src="{{ cachebust('/js/app.js') }}"></script>
			@include('plugins/google-analytics')
    </body>
</html>
