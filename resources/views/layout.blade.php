<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
				<title>Say It Back - A reality dating podcast</title>

				<link rel="preconnect" href="https://fonts.googleapis.com">
				<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
				<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet">
        <link href="{{ cachebust('css/app.css?v=2') }}" rel="stylesheet">

				@yield('meta')
    </head>
    <body class="px-4 py-12 font-sans antialiased text-black">
			<header class="flex max-w-lg mx-auto">
				<div class="mx-auto text-center">
					<a href="/" class="block mx-auto text-5xl font-extrabold tracking-tight uppercase lg:text-7xl">
						Say It Back
					</a>
					<div class="mt-2 text-xl font-bold text-gray-400 uppercase lg:text-3xl">
						A reality dating podcast
					</div>
				</div>
			</header>
			<main class="max-w-lg mx-auto">
				@yield('content')
			</main>
			<footer class="max-w-lg mx-auto">
			
			</footer>
			@include('plugins/google-analytics')
    </body>
</html>
