<header class="banner">
    <nav class="navbar is-primary is-fixed-top"role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
      </div>
      <div class="navbar-end">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu($primarymenu) !!}
        @endif
      </div>
    </nav>
</header>
