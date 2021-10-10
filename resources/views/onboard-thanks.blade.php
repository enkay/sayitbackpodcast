@extends('layout')

@section('title', 'Onboarding')

@section('content')
	<h2 class="mt-8 text-xl font-extrabold uppercase">You did it, {{ auth()->user()->first_name }}</h2>
	<p class="mt-2">Thanks for signing up! We'll contact you when we have a match for you, or if we require further information to adequately match you.</p>
	<p class="mt-8"><a href="/" class="underline">Return home</a></p>
@endsection
