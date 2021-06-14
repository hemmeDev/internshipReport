<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body data-barba="wrapper" @php body_class() @endphp>
        <main data-barba="container" data-barba-namespace="home" data-scroll-container class="main">
          @php do_action('get_header') @endphp
          @include('partials.header')
          @yield('content')
          @php do_action('get_footer') @endphp
          @include('partials.footer')
          @php wp_footer() @endphp
        </main>
  </body>
</html>
