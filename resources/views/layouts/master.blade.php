<!--Include top -->
@include('include.top')

<!--Include nav -->
@include('include.nav')

<div class="container mt-4">
  @yield('content')
</div>

<!--Include footer -->
@include('include.footer')

<!--Include bottom -->
@include('include.bottom')
