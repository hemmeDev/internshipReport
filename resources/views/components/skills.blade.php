@php
$skills = get_field('skills');
@endphp
<section class="skills">
  <div class="container">
    <div class="row">
      <div class="col-5 d-flex justify-content-end">
        <div class="skills__title">{!! $skills['title'] !!}learned skills</div>
      </div>
      <div class="col-2"></div>
      <div class="col-5">
        <p class="skills__text">{!! $skills['text'] !!}During my internship in learned a lot of new programming languages, frameworks, and
          overall worked with a lot of different software.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        @include('components.football-field')
      </div>
    </div>
    <div class="row align-items-center justify-content-center">
      <a href="{!! $skills['url'] !!}" class="btn btn__secondary">
        <div class="btn__inner">
          <span class="btn__text btn__text--secondary">{!! $skills['btn'] !!}see more</span>
          <span class="btn__arrow btn__arrow--secondary"></span>
        </div>
      </a>
    </div>
  </div>
</section>
