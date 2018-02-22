<article class="swagpath">
  <div class="swagpath-status fa-2x">
    <span class="fa-layers fa-fw">
      <i class="fas fa-circle"></i>
      <i class="fa-inverse fas fa-lock-open" data-fa-transform="shrink-8"></i>
    </span>
  </div>
  <div class="swagpath-info">
    <header>
      <h1 class="entry-title"><a href="{{ get_the_permalink() }}">{{ get_the_title() }}</a></h1>
    </header>
    <div class="entry-content">
      @php(the_excerpt())
    </div>
  </div>
  <div class="swagpath-swagifacts">
    <ul>
      @foreach(rwmb_meta( 'swagifact' ) as $swagifact)
        <li class="swagpath-swagifact {{TaxonomySwagtrack::get_swagifact($swagifact)['is_completed'] ? 'completed' : ''}}">
        {{ TaxonomySwagtrack::get_swagifact($swagifact)['title'] }}
        </li>
      @endforeach
    </ul>
  </div>
</article>
