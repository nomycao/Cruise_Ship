<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title') | Cruise Ship</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.2.0/foundation.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.fullpage/2.5.9/jquery.fullPage.min.css">
    <link href="{{asset("css/styles.css")}}" rel="stylesheet">

    @yield('styles')

    @yield('scripts')
</head>
<body>
    @include('titlebar')
    @yield('body')
    <script src="https://cdn.jsdelivr.net/jquery/2.2.2/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/foundation/6.2.0/foundation.min.js"></script>
    <script src="https://cdn.jsdelivr.net/g/jquery.fullpage@2.5.9(jquery.fullPage.min.js+vendors/jquery.easings.min.js+vendors/jquery.slimscroll.min.js)"></script>

    <script>
        $(document).foundation();
    </script>
    @yield('body-scripts')
</body>
</html>