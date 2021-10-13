<footer class="flex justify-center max-w-lg pt-4 mx-auto mt-8 text-xs border-t border-gray-200">
	@if(auth()->check())
		@if(auth()->user()->isAdmin())
			<a href="/admin" class="hover:underline px-2 font-bold uppercase">Admin</a>
		@endif
		<a href="{{ route('profiles.show', auth()->user()->uuid) }}" class="hover:underline px-2 font-bold uppercase">My Profile</a>
		<a href="{{ route('logout') }}" class="hover:underline px-2 font-bold uppercase">Sign out</a>
	@else
		<a href="{{ route('login') }}" class="hover:underline px-2 font-bold uppercase">Sign in</a>
	@endif
</footer>
