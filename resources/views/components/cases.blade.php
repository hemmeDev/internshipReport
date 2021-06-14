@php
$case_one = get_field('case-one');
$case_two = get_field('case-two');
@endphp
<section class="cases">
  <div class="case-one">
    <div data-scroll data-scroll-speed="1" class="case-one__background">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2>{!! $case_one['background'] !!}case one</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-5">
          <h1 class="case-one__title">{!! $case_one['title'] !!}Hakuna Matata</h1>
          <p class="case-one__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas id orci eu
            imperdiet. Mauris tristique elementum enim eu convallis. Vestibulum varius vestibulum dapibus. In quis ipsum
            consectetur, viverra lacus fringilla, ultricies ex.</p>
          <a href="{!! $case_one['url'] !!}" class="btn btn__primary">
            <div class="btn__inner">
              <span class="btn__text btn__text--primary">{!! $case_one['btn'] !!}see more</span>
              <span class="btn__arrow btn__arrow--primary"></span>
            </div>
          </a>
        </div>
        <div class="col-7 plus-offset">
          <a class="case-one__img"  href="{!! $case_one['url'] !!}">
            <img loading="lazy" src="{!! $case_one['img'] !!}" alt="">
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="case-two">
    <div  data-scroll data-scroll-speed="1"  class="case-two__background">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2>{!! $case_two['background'] !!}case two</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-7">
          <a class="case-two__img" href="{!! $case_two['url'] !!}">
            <img loading="lazy" src="{!! $case_one['img'] !!}" alt="">
          </a>
        </div>
        <div class="col-5">
          <h1 class="case-two__title">{!! $case_two['title'] !!}Installatietechniek</h1>
          <p class="case-two__text">{!! $case_two['text'] !!}Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas id orci eu
            imperdiet. Mauris tristique elementum enim eu convallis. Vestibulum varius vestibulum dapibus. In quis ipsum
            consectetur, viverra lacus fringilla, ultricies ex.</p>
          <a href="{!! $case_two['url'] !!}" class="btn btn__primary">
            <div class="btn__inner">
              <span class="btn__text btn__text--primary">{!! $case_two['btn'] !!}see more</span>
              <span class="btn__arrow btn__arrow--primary"></span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
