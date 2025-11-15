@extends('layouts.app')

@section('title', 'Meet Brendon! - Full Stack Developer')

@section('body-class', 'index-page')

@section('content')
  <main class="main">
    @include('sections.hero')

    @include('sections.about')
  </main>
@endsection