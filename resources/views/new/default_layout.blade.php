<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    @yield('style_sheets')
    @yield('header_scripts')
    @include('/new/bootstrap_header')
    
  </head>
  
  <body>
  
    {{-- Section to hold menu bar --}}
    @section('menubar')
      @include('/new/admin_menu_bar')
    @endsection
    
    {{-- Place holder to yield content --}}
    @yield('content')
  </body>
</html>