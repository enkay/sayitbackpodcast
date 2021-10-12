@extends('layout')

@section('meta')
	<meta property="og:url" content="{{ url()->current() }}">
	<meta property="og:title" content="{{ $user['name'] }} - Say It Back">
	<meta property="og:description" content="{{ $user['bio'] }}">
	<meta property="og:image" content="{{ $user['photo'] }}">
@endsection

@section('content')
	<div class="mt-8">
		@if($user['photo'])
		<img src="{{ $user['photo'] }}" class="w-full rounded-lg" alt="{{ $user['name'] }}">
		@endif
		<h2 class="mt-2 text-xl font-extrabold uppercase">
			{{ $user['name'] }}@if($user['age']), {{ $user['age'] }}@endif
		</h2>
		@if($user['location'])
		<h3 class="">{{ $user['location'] }}</h3>
		@endif
		<p>{{ $user['occupation'] }}</p>
	</div>
@endsection
