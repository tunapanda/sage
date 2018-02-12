<article @php(post_class())>
  <header class="entry-header">
    <h1 class="entry-title">{{ get_the_title() }}</h1>
    @php(the_excerpt())
  </header>
  <div class="swagpath-content">
    <div class="swagifacts">
      <ul>
        @foreach(SingleSwagpath::get_swagpath_swagifacts() as $swagifact)
          <li class="swagpath-swagifact {{ $swagifact['slug'] === $current_swagifact ? 'is-current' : '' }}">
           <a href="{{ SingleSwagpath::get_swagifact_permalink($swagifact['slug'], $post) }}">Section {{ $loop->iteration }}</a>
           <div class="section-name">{{ $swagifact['title'] }}</div>
          </li>
        @endforeach
      </ul>
    </div>
    <div class="current-swagifact">
        {!! SingleSwagpath::do_swagifact($current_swagifact) !!}
    </div>
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
</article>
