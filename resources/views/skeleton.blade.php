<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title') | Cruise Ship</title>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.2.0/foundation.min.css">
    <link href="{{asset("css/styles.css")}}" rel="stylesheet">

    @yield('styles')

    @yield('scripts')
</head>
<body>
    @include('titlebar')
    @yield('body')

    <script src="/js/vendor/jquery.js"></script>
    <script src="/js/vendor/foundation.js"></script>


    <script>
        $(document).foundation();
    </script>
    @yield('body-scripts')
</body>
</html>