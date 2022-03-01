
<ul>
			@forelse($projects as $project)
				<li><a href="{{ route('projects.show', $project) }}"> {{ $project -> title }} </a></li>
			@empty
				<li>{{ __('There are no projects to show') }}</li>
			@endforelse
			{{ $projects->links()}}
		</ul>