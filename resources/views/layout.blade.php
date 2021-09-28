<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
				<title>Say It Back - A reality dating podcast</title>

				<link rel="preconnect" href="https://fonts.googleapis.com">
				<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
				<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="font-sans antialiased py-12 text-black px-4">
			<header class="flex max-w-3xl mx-auto">
				<div class="mx-auto text-center">
					<a href="/" class="text-7xl tracking-tight inline-block font-extrabold uppercase">Say It Back</a>
					<div class="mt-2 text-gray-400 text-3xl uppercase font-bold">A reality dating podcast</div>
					<p class="mt-6 max-w-lg text-xl">
						Every Wednesday, hosts <a href="https://www.instagram.com/vana_cristina/" target="_blank" class="underline">Vana</a> & <a href="https://www.instagram.com/itslaurentbtw/" target="_blank" class="underline">Laurent</a> send single men and women on live audio dates where they try to find love (or at least slide in some DMs)
					</p>
				</div>
			</header>
			<main class="mt-12 max-w-3xl mx-auto">
				@yield('content')
			</main>
			<footer class="max-w-3xl mx-auto">
			
			</footer>
    </body>
</html>
