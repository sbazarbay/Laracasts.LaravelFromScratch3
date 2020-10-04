@can('edit', $user)
	<a href="{{ route('profile.edit', $user->username) }}" class="rounded-full border border-gray-300 py-2 px-4 text-xs mr-2">
		Edit Profile
	</a>
@endcan