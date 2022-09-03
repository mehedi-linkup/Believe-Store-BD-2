<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Believe Store BD"/>
	  <meta name="author" content="Believe Store"/>
    <meta property="og:image" content="http://localhost:8080/category/subcategory/product/11" />
    <!-- FAVICONS ICON -->
	  <link rel="shortcut icon" href="{{ asset($content->logo) }}">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Montserrat:wght@100;200;300;400;500;600;700;800&family=Open+Sans:wght@300;400;500;600;700;800&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('website/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/viewbox.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/style.css') }}">
    @stack('web-css')
	<!-- PAGE TITLE HERE -->
    <title>@yield('title') - Believe Store BD</title>
</head>
<body>
    
    {{-- Web Header --}}
    @include('layouts.partials.web_header')
    {{-- End Web Header --}}

    @yield('web-content')

    {{-- Footer --}}
    @include('layouts.partials.web_footer')
    {{-- End Footer --}}

    <script src="{{ asset('website/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('website/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('website/assets/js/jquery.viewbox.min.js') }}"></script>
    <script>
      $(function(){
        $('.image-link').viewbox();
      });
    </script>
    <script src="{{ asset('website/assets/js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('website/assets/main.js') }}"></script>
    @stack('web-js')
</body>
</html>