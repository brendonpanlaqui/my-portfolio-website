@extends('layouts.app')

@section('content')
  <main class="main">
    @include('sections.hero')
    @include('sections.about')
    @include('sections.projects')
    @include('sections.contact')
  </main>
@endsection