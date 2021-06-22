<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('css')
    <title>@yield('title')</title>
</head>
<body>
    
    <h3>@yield('page_title')</h3>

    @yield('navbar')

    <div>
        @yield('main_content')
    </div>

    <div>
        Copyright@2021
    </div>

</body>
</html>