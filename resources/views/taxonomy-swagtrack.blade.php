@extends('layouts.app')

@section('content')
  @include('partials.breadcrumbs')
  @include('partials.tracks-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @if(sizeof($child_tracks) === 0)
  <div class="page-content">
    <div class="swagpaths">
      @while (have_posts()) @php(the_post())
        @include('partials.content-'.get_post_type())
      @endwhile
    </div>
  </div>
  @else
  <div class="swagtracks">
    @foreach ($child_tracks as $swagtrack)
      @include('partials.content-swagtrack')
    @endforeach
  </div>
  @endif

  {!! get_the_posts_navigation() !!}
@endsection
