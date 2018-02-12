<footer class="content-info">
  <div class="container">
    <div class="row">
      <nav class="nav-footer">
        @if (has_nav_menu('footer_navigation'))
          {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
      <div class="tunapanda-credit">
        <img src="{{ \App\asset_path('images/powered.png') }}" alt="Powered by Tunapanda" />
      </div>
    </div>
  </div>
</footer>
