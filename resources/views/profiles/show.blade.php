@extends('layout')

@section('meta')
	<meta property="og:url" content="{{ url()->current() }}">
	<meta property="og:title" content="{{ $user['name'] }} - Say It Back">
	<meta property="og:description" content="{{ $user['name'] }}, {{ $user['age'] }} from {{ $user['location'] }}">
	<meta property="og:image" content="{{ $user['photo'] }}">
@endsection

@section('content')
	<div class="mt-8">
		<img src="{{ $user['photo'] }}" class="w-full rounded-lg" alt="{{ $user['name'] }}">
		<h2 class="mt-2 text-xl font-extrabold uppercase">{{ $user['name'] }}, {{ $user['age'] }}</h2>
		<h3 class="">{{ $user['location'] }}</h3>
		<p>{{ $user['occupation'] }}</p>
	</div>
@endsection
