<x-app>
	<div>
		@foreach($users as $user)
			<a href="profiles/{{ $user->username }}"><div class="flex items-center mb-5">
				<img src="{{ $user->avatar }}" alt="{{ $user->username }}'s avatar" width="60" class="mr-4 rounded-full">
				
				<div>
					<h4 class="font-bold">{{ '@' . $user->username }}</h4>
				</div>
			</div></a>
		@endforeach
	
		{{ $users->links() }}
	</div>
</x-app>