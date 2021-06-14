@php
$about =- get_field('about');
@endphp
<section class="about">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="about__title">{!! $about['title']!!}about vazquez</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-8 min-offset">
        <a class="about__img" href="/about-vazquez/">
          <img loading="lazy" src="{!! $about['img']!!}" alt="">
        </a>
      </div>
      <div class="col">
        <p class="about__text">{!! $about['text']!!}Vazquez is a digital agency focused on creating fans for your brand. We work with a 4
          line strategy called
          SOOM to score at each point of the field to make a difference and creating fans of your brand.</p>
        <a href="#" class="btn btn__primary">
          <div class="btn__inner">
            <span class="btn__text btn__text--primary">{!! $about['btn']!!}see more</span>
            <span class="btn__arrow btn__arrow--primary"></span>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div class="about__slider">
    <h4 class="about__slider-text-one">
      Inside Estadio <span class="about__slider-text-one--border">Inside Estadio </span>
      Inside Estadio <span class="about__slider-text-one--border">Inside Estadio </span>
      Inside Estadio <span class="about__slider-text-one--border">Inside Estadio </span>
      Inside Estadio <span class="about__slider-text-one--border">Inside Estadio </span>
      Inside Estadio <span class="about__slider-text-one--border">Inside Estadio </span>
    </h4>
    <h4 class="about__slider-text-two">
      Inside Estadio <span class="about__slider-text-two--border">Inside Estadio </span>
      Inside Estadio <span class="about__slider-text-two--border">Inside Estadio </span>
      Inside Estadio <span class="about__slider-text-two--border">Inside Estadio </span>
      Inside Estadio <span class="about__slider-text-two--border">Inside Estadio </span>
      Inside Estadio <span class="about__slider-text-two--border">Inside Estadio </span>
    </h4>
  </div>
</section>
