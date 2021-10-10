@extends('layout')

@section('meta')
	<meta property="og:url" content="{{ url()->current() }}">
	<meta property="og:title" content="Say It Back - Apply to be matched">
	<meta property="og:description" content="Every week, hosts Vana & Laurent send single men and women on phone dates where they try to find love (or at least slide in the DMs)">
	<meta property="og:image" content="{{ asset('/images/say-it-back-meta-preview.png?v=2') }}">
@endsection

@section('content')
	<h2 class="mt-8 text-xl font-extrabold uppercase">Apply to be matched</h2>
	{{-- <p class="mt-2">Applications are currently closed, check back soon!</p> --}}
	<p class='mt-2'>Every love story starts with a quick form...</p>
	<email-form class="mt-8"></email-form>
@endsection
