@extends('layout')

@section('content')
	<div class="mt-12">
		<h2 class="mt-6 text-xl font-extrabold uppercase">Login</h2>
		
		@if($errors->any())
			<div class="mt-2 text-red-700">
				<p>We could not verify your email, please try again.</p>
			</div>
		@endif

		<p class="mt-2">This page isn't ready yet, check back later!</p>
	</div>
@endsection
