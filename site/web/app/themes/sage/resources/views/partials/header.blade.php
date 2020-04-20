<header class="banner">
    <nav class="navbar is-info is-fixed-top"role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="{{ home_url('/') }}"><img src="/app/uploads/2020/04/logo-e1587388040921.png" alt="Bananarama logo" width="50" height="50"></a>
        <a role="button" class="navbar-burger" data-target="primary-menu" aria-label="menu" aria-expanded="false">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>
      <div class="navbar-end">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu($primarymenu) !!}
        @endif
      </div>
    </nav>
</header>
