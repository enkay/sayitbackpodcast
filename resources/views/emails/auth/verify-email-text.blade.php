@extends('emails.template-text')

@section('content')
Please open the URL below in your web browser to verify your email address.
@endsection

@section('button')
{!! $token_url !!}
@endsection
