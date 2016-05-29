@extends('base')

@push('scripts')
@endpush

@push('styles')
@endpush

@push('main')
{{dump($index)}}
{{dump(($index->firstItem() - 1) * $index->perPage())}} to {{dump($index->lastItem() * $index->perPage())}}
	@foreach ($index as $post)
	<a href="/post/{{$post->url}}" class="post-block">
		<div class="created_by">posted by <a href="/by/{{$post->user->name}}">{{$post->user->name}}</a> at {{date('U')}}</div>
		<p>{{$post->title}}</p>
	</a>
	@endforeach
@endpush

@push('title')

@if ($index)
<h1>Posts {{$index}} to </h1>
@else
<h1>Latest Posts</h1>
@endif
@endpush
