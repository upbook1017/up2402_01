@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックス
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述できます。</p>
@endsection

@section('footer')
    upbook1017
@endsection
