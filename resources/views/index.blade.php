@extends('layouts.app')

@section('page-title', '首頁')

@section('info')
    @auth()
    {{--  使用者/參賽資訊  --}}
    <div>
        <ul>
            <li>帳號：{{auth()->user()->username}}</li>
        </ul>
        
        @if($team = auth()->user()->team)
        <ul>
            <li>參賽類別： {{ $team->game_type }}</li>
            <li>學校： {{ $team->school }}</li>
            <li>選手1： {{ $team->player1 }}</li>
            <li>選手2： {{ $team->player2 }}</li>
        </ul>
        @endif
    </div>
    @else
     <div>請先登入</div>
    @endauth()
@endsection

@section('content')

@endsection