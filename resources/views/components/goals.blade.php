@php
$goals = get_field('goals');
@endphp
<section class="goals">
  <div class="container">
    <div class="row justify-content-center">
      <h1 class="goals__title">{!! $goals['title'] !!}learning objectives</h1>
    </div>
    <div class="row">
      <div class="col-6">
        <div data-scroll class data-scroll-speed="3" class="goals__one">
          <a href="{!! $goals['url-one'] !!}">
            <div class="goals__img">
              <img src="{!! $goals['img-one'] !!}" alt="">
            </div>
            <h2 class="goals__item-title">{!! $goals['title-one'] !!}goal one</h2>
          </a>
        </div>
      </div>
      <div class="col-6">
        <div data-scroll class data-scroll-speed="4" class="goals__two">
          <a href="{!! $goals['url-two'] !!}">
            <div class="goals__img">
              <img src="{!! $goals['img-two'] !!}" alt="">
            </div>
            <h2 class="goals__item-title">{!! $goals['title-two'] !!}goal two</h2>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
