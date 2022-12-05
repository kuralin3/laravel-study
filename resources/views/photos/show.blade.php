@extends('layouts.default')

@section('title', 'アップロード写真表示')
@section('content')
    <img src="{{ asset('storage/photos/' . $fileName) }}" alt="アップロード画像">

    <form action="{{ route('photos.destroy', ['photo' => $fileName]) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">削除</button>
    </form>
@endsection
