@extends('emails.selfco.template-text')

@section('content')
Welcome to Selfco!

Please open the URL below in your web browser to verify your email address.
@endsection

@section('button')
{!! $token_url !!}
@endsection
