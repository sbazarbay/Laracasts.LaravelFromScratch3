<h3 class="font-bold text-xl mb-4">Following</h3>

<ul>
	@forelse(auth()->user()->follows as $user)
	<li class="mb-4">
        <a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
			<img 
				src="{{ $user->getAvatar(40) }}" 
				alt="" 
				class="rounded-full mr-2"
			>{{ $user->name }}
		</a>
	</li>
	@empty
		<li>No friends yet!</li>
	@endforelse
</ul>