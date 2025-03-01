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

    <table>
        <tr>
            <th>getDataで表示</th>
        </tr>
        @foreach ($boards as $board)
            <tr>
                <td>{{ $board->getData() }}</td>
            </tr>
        @endforeach
    </table>

    <form action="{{ route('person.show', $board) }}" method="post">
        @csrf
        <input type="hidden" name="person_id" value="{{ $person->id }}">

        <table>
            <tr>
                <th>title: </th>
                <td><input type="text" name="title" value="{{ old('title') }}"></td>
            </tr>

            <tr>
                <th>message: </th>
                <td><input type="text" name="message" value="{{ old('message') }}"></td>
            </tr>

            <tr>
                <th></th>
                <td><input type="submit" value="send"></td>
            </tr>
        </table>
    </form>
@endsection

@section('footer')
    upbook1017
@endsection
