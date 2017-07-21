<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
    
  </head>


  <body>

  @include('partials._navigation')
  <!-- MAIN PAGE CONTENT GOES HERE -->

  <main class="main-body-content ">
    @include('partials._messages')

    @yield('body-content')
  </main>

  @include('partials._footer')
  @include('partials._javascript')
  @yield('scripts')
  </body>
</html>
