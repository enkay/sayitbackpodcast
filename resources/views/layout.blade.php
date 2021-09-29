<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
				<title>Say It Back - A reality dating podcast</title>

				<link rel="preconnect" href="https://fonts.googleapis.com">
				<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
				<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet">
        <link href="{{ cachebust('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="font-sans antialiased py-12 text-black px-4">
			<header class="flex max-w-lg mx-auto">
				<div class="mx-auto text-center">
					<a href="/" class="block mx-auto text-5xl lg:text-7xl tracking-tight font-extrabold uppercase">
						Say It Back
					</a>
					<div class="mt-2 text-gray-400 text-xl lg:text-3xl uppercase font-bold">
						A reality dating podcast
					</div>
				</div>
			</header>
			<main class="max-w-lg mx-auto">
				@yield('content')
			</main>
			<footer class="max-w-lg mx-auto">
			
			</footer>
    </body>
</html>
