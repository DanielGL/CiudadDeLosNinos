<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ciudad de los ni&ntilde;os</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Marco Rivadeneyra">

    <!-- Le styles -->
    {{ Asset::container('bootstrapper')->styles() }}
    {{ Asset::styles() }}

    @yield('extra-css')
  </head>

  <body>

<!-- nav-bar -->
<? echo Navbar::create('Ciudad de los ni&ntilde;os', URL::to_action('menu@display'),array(), Navbar::FIX_TOP);
?>
    <!-- /nav-bar -->

    <!-- container -->
    <div class="container">
        @yield('main-content')
    </div>
    <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{ Asset::container('bootstrapper')->scripts() }}
    {{ Asset::scripts() }}
    @yield('extra-js')
    </body>
</html>
