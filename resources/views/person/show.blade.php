@extends('layouts.helloapp')

@section('title', 'Board.show')

@section('menubar')
    @parent
    ボードページ
@endsection

@section('content')
    <table>
        <tr>
            <th>{{ $person->name }}</th>
            <th>{{ $person->age }}</th>
            <th>{{ $person->id }}</th>
            <th>{{ $person->aaaa }}</th>
        </tr>
    </table>

    <table>
        @foreach ($boards as $board)
        <tr>
            <th>{{ $board->id }}</th>
            <th>{{ $board->title }}</th>
            <th>{{ $board->message }}</th>
        </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    upbook1017
@endsection
