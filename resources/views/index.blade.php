@extends('base')

@push('scripts')
@endpush

@push('styles')
@endpush

@push('main')
	@foreach ($index as $post)
	<div onclick="document.location.href = '/post/{{$post->url}}';" class="post-block">
		<h2>#{{$post->id}}</h2>
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
			<a href="?page=1"><<</a>
			<a href="?page={{$index->currentPage() - 1}}"><</a>
		@else
			<a class="disabled"><<</a>
			<a class="disabled"><</a>
		@endif
		posts {{($index->currentPage() - 1) * $index->perPage() + 1}} to 
		@if (count($index->items()) % $index->perPage() == 0)
			{{$index->perPage() * $index->currentPage()}}
		@else
			{{$index->perPage() * ($index->currentPage() - 1) + count($index->items()) % $index->perPage()}}
		@endif
		of {{$index->total()}}
		@if ($index->currentPage() < $index->lastPage())
			<a href="?page={{$index->currentPage() + 1}}">></a>
			<a href="?page={{$index->lastPage()}}">>></a>
		@else
			<a class="disabled">></a>
			<a class="disabled">>></a>
		@endif
		<div>sort by #id descending</div>
		</h1>
	@else
		<h1>Latest Posts</h1>
	@endif
@endpush
