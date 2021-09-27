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
        <li><a href="{{route('index')}}">首頁</a></li>
        
        
        @guest()
            <li><a href="{{route('auth.loginForm')}}">登入</a></li>
        @endguest
        
        @auth()
            @if(auth()->user()->is_admin)
                <li><a href="{{route('admin.import')}}">管理參賽名單</a></li>
            @endif
        
            <form method="post" action="{{route('auth.logout')}}">
                @csrf
                <li><button type="submit">登出</button></li>
            </form>
        @endauth
    </ul>
</div>

@yield('info')

@yield('content')

</body>
</html>