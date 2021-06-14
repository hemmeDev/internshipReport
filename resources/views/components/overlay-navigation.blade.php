<div data-scroll data-scroll-sticky data-scroll-target=".main" class="overlay">
  <div class="container">
    <div class="row">
      <div class="col-8">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'overlay__main-menu']) !!}
        @endif
      </div>
      <div class="col-4 d-flex align-items-center">
        <div class="overlay__credits">
          <ul class="overlay__info-menu">
            <li>Maarten Hemme</li>
            <li>Internship report</li>
            <li>18mvb</li>
            <li>25/01/2021 - 19/07/2021</li>
          </ul>
          <ul class="overlay__credits-menu">
            <li><span>Special thanks to:</span></li>
            <li>Vazquez</li>
            <li>Guido Bleiji</li>
            <li>Brian Meulenbelt</li>
            <li>Klaas Derksen</li>
            <li>TENTEN</li>
            <li>Kas Nijhuis</li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</div>
