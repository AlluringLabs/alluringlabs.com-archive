@extends('layouts.app')

@section('main')
  @include('partials.hero')
  {{-- @include('partials.posts', ['posts' => $posts]) --}}
  @include('partials.services')
  @include('partials.team')
  @include('partials.github')
@endsection
