@extends('layouts.app')
@section('content')
  @while(have_posts()) @php(the_post())
    <div class="badge-image">
      <img src="{{ $image_url }}" alt="{{ get_the_title() }}">
    </div>
    <article @php(post_class())>
    <header>
      <h1 class="entry-title">{{ get_the_title() }}</h1>
          Issued to {{ $badge_issuee->data->display_name}} on {{ date('d/m/Y', strtotime($assertion_statement['timestamp']))}}
    </header>
    <div class="entry-content">
      @php(the_content())
    </div>
    <a href="{{ $json_url }}" class="btn btn-primary">JSON</a>
  </article>

  @endwhile
@endsection
