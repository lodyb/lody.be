@extends('base')

@push('scripts')
@endpush

@push('styles')
@endpush

@push('main')
	@foreach ($index as $post)
	<div href="/post/{{$post->url}}" class="post-block">
		<p>{{$post->title}}</p>
		<div class="created_by">posted by
			<a href="/by/{{$post->user->name}}">
				{{$post->user->name}}
			</a> at {{$post->release_date}}
		</div>
	</div>
	@endforeach
@endpush

@push('title')
	@if ($index)
		<h1>
		@if ($index->currentPage() > 1)
			<a href="/{{$index->currentPage()}}"><</a>
		@endif
		posts {{($index->currentPage() - 1) * $index->perPage()}} to {{(count($index->items()) * $index->currentPage())}}
		@if ($index->currentPage() < $index->lastPage())
			<a href="/{{$index->currentPage() + 1}}">></a>
		@endif
		</h1>
	@else
		<h1>Latest Posts</h1>
	@endif
@endpush
