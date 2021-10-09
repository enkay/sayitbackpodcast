@extends('layout')

@section('meta')
	<meta property="og:url" content="{{ url()->current() }}">
	<meta property="og:title" content="Say It Back - Apply to be matched">
	<meta property="og:description" content="Every Monday, hosts Vana & Laurent send single men and women on audio dates where they try to find love (or at least slide in someone's DMs!)">
	<meta property="og:image" content="{{ asset('/images/say-it-back-meta-preview.png') }}">
@endsection

@section('content')
	<div class="mt-12">
		<h2 class="mt-6 text-xl font-extrabold uppercase">Apply to be matched</h2>
		<p class="mt-2">Applications are currently closed, check back soon!</p>
		{{-- <p class='mt-2'>Every love story starts with a quick form.</p> --}}
		{{-- <email-form class="mt-12"></email-form> --}}
	</div>
@endsection
