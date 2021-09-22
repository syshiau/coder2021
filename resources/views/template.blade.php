<!doctype html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{--  選單  --}}
    <div>
        <ul>
            <li><a href="">首頁</a></li>
            <li><a href="">管理參賽名單</a></li>
            <li><a href="">登入</a></li>
            <li><a href="">登出</a></li>
        </ul>
    </div>

    {{--  使用者/參賽資訊  --}}
    <div>
        <ul>
            <li>帳號：</li>
        </ul>
        <ul>
            <li>參賽類別：</li>
            <li>學校：</li>
            <li>選手1：</li>
            <li>選手2：</li>
        </ul>
    </div>

    {{--  登入表單  --}}
    <div>
        <form action="">
            帳號 <input type="text" name="username"><br>
            密碼 <input type="password" name="password"><br>
            <button type="submit">登入</button>
        </form>
    </div>

    {{--  參賽名單列表  --}}
    <div>
        <p><a href="">匯入名單</a></p>
        <table>
            <tr>
                <td>參賽類別</td>
                <td>帳號</td>
                <td>學校</td>
                <td>選手1</td>
                <td>選手2</td>
                <td>管理</td>
            </tr>
        </table>
    </div>
    
</body>
</html>