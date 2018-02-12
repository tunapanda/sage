{{--
  Template Name: Swagtracks
--}}
@extends('layouts/app')

@section('content')
  @foreach($tracks as $swagtrack)
    @include('partials.content-swagtrack')
  @endforeach
@endsection