<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('head')
    <link href="{{ asset('/css/reset.css') }}" rel="stylesheet">
    <link type="text/scss" href="{{ asset('/css/common.css') }}" rel="stylesheet">
    <link type="text/scss" href="{{ asset('/css/top.css') }}" rel="stylesheet">
</head>

<body>
    @yield('content')
    <footer>
        <ul>
            <li>© 2021 PCafe All Rights Reserved</li>
            <li><a href=""></a></li>
            <li><a target="_blank" href=""></a></li>
        </ul>
    </footer>
</body>

</html>