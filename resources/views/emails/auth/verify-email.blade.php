@extends('emails.template')

@section('content')
	<x-h1>Verify your email</x-h1>
	<x-p>Please click the button below to verify your email address.</x-p>
@endsection

@section('button')
	<x-button url="{!! $token_url !!}">Verify Your Email</x-button>
@endsection
