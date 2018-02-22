{{--
  Template Name: Swagtracks
--}}
@extends('layouts/app')

@section('content')
  @include('partials.tracks-header')

  <div class="swagtracks">
    @foreach($tracks as $swagtrack)
      @include('partials.content-swagtrack')
    @endforeach
  </div>
@endsection