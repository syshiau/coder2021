@extends('layouts.app')

@section('page-title', '登入')

@section('content')
    {{--  登入表單  --}}
    <div>
        <form action="{{route('auth.login')}}" method="post">
            帳號 <input type="text" name="username"><br>
            密碼 <input type="password" name="password"><br>
            <button type="submit">登入</button>
            @csrf
        </form>
    </div>
@endsection