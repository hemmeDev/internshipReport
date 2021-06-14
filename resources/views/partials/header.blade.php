<header class="header">
  <div class="header__brand">
    @include('components.brand')
  </div>
  <div class="header__navigation">
    <div class="header__menu">
      @include('components.hamburger')
    </div>
    <div class="header__music">
      @include('components.music-btn')
    </div>
  </div>
</header>
@include('components.overlay-navigation')

