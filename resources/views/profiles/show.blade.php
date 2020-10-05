<x-app>
	<header class="mb-6 relative">

		<div class="relative">
			<img src="/images/default-profile-banner.jpg" alt="" class="mb-2">

			<img 
	            src="{{ $user->avatar }}" 
	            alt="" 
	            class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
	            style="left: 50%" 
	            width="150" 
	        >
		</div>


		<div class="flex justify-between items-center mb-6">
			<div style="max-width: 270px">
				<h2 class="font-bold text-2xl">{{ $user->name }}</h2>
				<p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
			</div>

			<div class="flex">
				<x-edit-button :user='$user'></x-edit-button>
				<x-follow-button :user='$user'></x-follow-button>
			</div>
		</div>

        <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean posuere lorem et porttitor dictum. Sed accumsan non ex a feugiat. Curabitur malesuada quam sed lacus elementum, a blandit enim rhoncus.</p>

	</header>

	@include('_timeline', $tweets)
</x-app>