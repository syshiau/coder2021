<!doctype html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
</head>
<body>
{{--  選單  --}}
<div>
    <ul>
        <li><a href="">首頁</a></li>
        <li><a href="">管理參賽名單</a></li>
        <li><a href="{{route('auth.loginForm')}}">登入</a></li>
        <li><a href="">登出</a></li>
    </ul>
</div>

@yield('info')

@yield('content')

</body>
</html>