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
                            <td>{{-- $item->name }}</td>
                <td>{{ $item->mail }}</td>
                <td>{{ $item->age }}</td>
                <td>{{ $item->aaaa --}}</td>
                        </tr>
    @endforeach
                </table>-->

    <table>
        <tr>
            <th>{{ $items->name }}</th>
            <th>{{ $items->age }}</th>
            <th>{{ $items->id }}</th>
            <th>{{ $items->aaaa }}</th>
        </tr>
    </table>
@endsection

@section('footer')
    upbook1017
@endsection
