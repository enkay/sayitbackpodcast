@extends('emails.template')

@section('content')
	<x-h1>Sign In</x-h1>
	<x-p>Please click the button below to sign in.</x-p>
@endsection

@section('button')
	<x-button url="{!! $login_token->url !!}">Sign In</x-button>
@endsection
