@extends('layouts.app')

@section('page-title', '首頁')

@section('info')
    @auth()
    {{--  使用者/參賽資訊  --}}
    <div>
        <ul>
            <li>帳號：{{auth()->user()->username}}</li>
        </ul>
        <ul>
            <li>參賽類別：</li>
            <li>學校：</li>
            <li>選手1：</li>
            <li>選手2：</li>
        </ul>
    </div>
    @else
     <div>請先登入</div>
    @endauth()
@endsection

@section('content')

@endsection