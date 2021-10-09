@extends('layout')

@section('title', 'Onboarding')

@section('content')
	<h2 class="mt-6 text-xl font-extrabold uppercase">Last but not least</h2>
	<p class="mt-2">Choose a profile photo we can show to your potential matches. Make sure your face is clearly visible, and that you're not wearing sunglasses.</p>
	<photo-form class="mt-12"></photo-form>
	{{-- Match me already --}}
@endsection
