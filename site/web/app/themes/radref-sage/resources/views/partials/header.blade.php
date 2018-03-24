<header class="banner">
  <div class="container">
    <nav class="navbar">
      <a class="brand" href="{{ home_url('/') }}">
        <img src="@asset('images/radref2.png')" />
      </a>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
