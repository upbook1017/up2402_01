@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックス
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>これは、<middleware>google.com</middleware>リンク</p>
    <p>これは、<middleware>yahoo.com</middleware>リンク</p>
@endsection

@section('footer')
    upbook1017
@endsection
