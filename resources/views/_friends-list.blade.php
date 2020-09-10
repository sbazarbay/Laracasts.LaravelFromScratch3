<h3 class="font-bold text-xl mb-4">Friends</h3>

<ul>
	@foreach(range(1, 8) as $index)
	<li class="mb-4">
		<div class="flex items-center text-sm">
			<img 
				src="https://avatars.dicebear.com/api/avataaars/{{ $index }}.svg?options[h]=40" 
				alt="" 
				class="rounded-full mr-2"
			> John Doe {{ $index }}
		</div>
	</li>
	@endforeach
</ul>