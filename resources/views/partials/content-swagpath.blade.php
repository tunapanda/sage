<article class="swagpath {{ TaxonomySwagtrack::path_status($post) }}">
  <div class="swagpath-status fa-2x">
    <span class="fa-layers fa-fw">
      <i class="fas fa-circle"></i>
      @php switch(TaxonomySwagtrack::path_status($post)):
        case('completed'): @endphp
          <i class="fa-inverse fas fa-check" data-fa-transform="shrink-8"></i>
          @php break;
        case('locked'): @endphp
          <i class="fa-inverse fas fa-unlock" data-fa-transform="shrink-8"></i>
          @php break;
        default: @endphp
          <i class="fa-inverse fas fa-lock-open" data-fa-transform="shrink-8"></i>
      @php endswitch; @endphp
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
