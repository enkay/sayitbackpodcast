@extends('emails.template-text')

@section('content')
Please open the URL below in your web browser to sign in.
@endsection

@section('button')
{!! $login_token->url !!}
@endsection
