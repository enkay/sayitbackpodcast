@extends('layout')

@section('meta')
	<meta property="og:url" content="{{ url()->current() }}">
	<meta property="og:title" content="Say It Back - A reality dating podcast">
	<meta property="og:description" content="Every Monday, hosts Vana & Laurent send single men and women on audio dates where they try to find love (or at least slide in someone's DMs!)">
	<meta property="og:image" content="{{ asset('/images/say-it-back-meta-preview.png') }}">
@endsection

@section('content')
<div class="mt-6">
	<a href="https://open.spotify.com/show/1418k8i0vFh6nORRsu1OjM" target="_blank" class="flex justify-center p-3 border-2 border-black rounded-lg">
		<img src="{{ asset('images/icons/spotify.svg')}}" alt="Spotify" width="24" height="24" class="block mr-2">
		<span class="font-bold uppercase">Listen on Spotify</span>
	</a>
	<a href="https://podcasts.apple.com/ca/podcast/say-it-back/id1588973872" target="_blank" class="flex justify-center p-3 mt-3 border-2 border-black rounded-lg">
		<img src="{{ asset('images/icons/apple-podcasts.svg')}}" alt="Apple Podcasts" width="24" height="24" class="block mr-2">
		<span class="font-bold uppercase">Listen on Apple Podcasts</span>
	</a>
	<a href="https://podcasts.google.com/feed/aHR0cHM6Ly9hbmNob3IuZm0vcy82ZGFiMDdkMC9wb2RjYXN0L3Jzcw" target="_blank" class="flex justify-center p-3 mt-3 border-2 border-black rounded-lg">
		<img src="{{ asset('images/icons/google-podcasts.svg')}}" alt="Apple Podcasts" width="24" height="24" class="block mr-2">
		<span class="font-bold uppercase">Listen on Google Podcasts</span>
	</a>
</div>
<div class="mt-3">
	<a href="/apply" class="hover:bg-gray-800 block p-4 font-bold text-center text-white uppercase bg-black rounded-lg">Apply To Be Matched</a>
</div>
<div class="mt-12">
	<img src="/images/vana-laurent.jpg" class="max-w-full rounded-lg" alt="Vana and Laurent" height="345">
	<p class="lg:max-w-lg lg:text-xl max-w-full mt-6 text-lg text-left">
		Every Monday, hosts <a href="https://www.instagram.com/vana_cristina/" target="_blank" class="underline">Vana</a> & <a href="https://www.instagram.com/itslaurentbtw/" target="_blank" class="underline">Laurent</a> send single men and women on audio dates where they try to find love (or at least slide in someone's DMs!)
	</p>
</div>
<div class="mt-12">
	<iframe src="https://anchor.fm/sayitbackpodcast/embed/episodes/Trailer-e18c33o" height="102px" width="100%" frameborder="0" scrolling="no"></iframe>
</div>
@endsection
