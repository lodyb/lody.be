@extends('base')

@push('scripts')
@endpush

@push('styles')
@endpush

@push('main')
	<article>
	<h2>#{{$post->id}}</h2>
		<div class="created_by">posted by
			<a href="/by/{{$post->user->name}}">
				{{$post->user->name}}
			</a> at {{$post->release_date}}
		</div>
		{!!$post->body!!}
	</article>
@endpush

@push('title')
	<h1>{{$post->title}}</h1>
@endpush
