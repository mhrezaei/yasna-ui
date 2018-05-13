{{-- basic and necessary html tags --}}

<!DOCTYPE html>
{{--getting language of the page--}}
<html lang="{{getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    @yield('header_meta')

    <title>@yield('page_title')</title>

    @yield('header_assets')

</head>
<body>

    @yield('body')

    @yield('footer_assets')

</body>
</html>

