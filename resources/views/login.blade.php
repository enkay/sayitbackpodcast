@extends('layout')

@section('content')
	<div class="mt-12">
		<h2 class="mt-6 text-xl font-extrabold uppercase">Sign In</h2>
		<p class="mt-2">Come here often?</p>
		
		@if($errors->any())
			<div class="mt-2 text-red-700">
				<p>We could not verify your email, please try again.</p>
			</div>
		@endif

		<login-form class="mt-8"></login-form>
	</div>
@endsection
