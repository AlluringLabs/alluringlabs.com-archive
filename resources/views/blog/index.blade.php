@extends('layouts.app')

@section('main')
<div class="container">

  @foreach($posts as $post)

    <a href="{{ url('/blog', $post->slug) }}">
      <div class="post">
        <div class="title">{{ $post->title }}</div>
      </div>
    </a>

  @endforeach
  @include('partials.pagination', ['paginator' => $posts])

</div>
@endsection
