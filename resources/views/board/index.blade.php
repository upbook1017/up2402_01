@extends('layouts.helloapp')

@section('title', 'Board.index')

@section('menubar')
    @parent
    ボードページ
@endsection

@section('content')
    <!--<table>
        <tr>
            <th>Name</th>
            <th>Mail</th>
            <th>Age</th>
            <th>aaaa(テスト)</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->mail }}</td>
                <td>{{ $item->age }}</td>
                <td>{{ $item->aaaa }}</td>
            </tr>
        @endforeach
    </table>-->

    <table>
        <tr>
            <th>Data</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->getData() }}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    upbook1017
@endsection
