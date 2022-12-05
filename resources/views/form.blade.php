@extends('layouts.default')

@section('title', 'GETふぉーむ')
@section('content')
    <form action="/query" method="GET">
        <label>キーワード : <input type="text" name="keyword"></label>        
        <button type="submit">送信する</button>
    </form>
@endsection