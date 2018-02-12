<header class="banner">
  <div class="container">
    <div class="row">
      <div class="header-logo">
        <a class="brand" href="{{ home_url('/') }}"><img src="{{ \App\asset_path('images/swag.png') }}" alt="{{ get_bloginfo('name', 'display') }}" /></a>
      </div>
      <nav class="nav-primary">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
    </div>
  </div>
</header>
