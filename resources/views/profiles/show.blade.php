@extends('layout')

@section('meta')
	<meta property="og:url" content="{{ url()->current() }}">
	<meta property="og:title" content="{{ $user->first_name }} - Say It Back">
	{{-- <meta property="og:description" content="Every week, hosts Vana & Laurent send single men and women on phone dates where they try to find love (or at least slide in the DMs)"> --}}
	{{-- <meta property="og:image" content="{{ asset('/images/say-it-back-meta-preview.png?v=2') }}"> --}}
@endsection

@section('content')
	<h2 class="mt-8 text-xl font-extrabold uppercase">{{ $user->first_name }}</h2>
	<img src="{{ $user->photo_url }}" class="w-full mt-2 rounded-lg" alt="{{ $user->name }}">
@endsection
