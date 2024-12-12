@extends('layouts.helloapp')

@section('title', 'Person.add2')

@section('menubar')
    @parent
    投稿ページ
@endsection

@section('content')

<form action="{{ route('person.add2') }}" method="post">
        <table>
            @csrf

            <tr>
                <th>name: </th>
                <td><input type="text" name="name" value="{{ old('name') }}" ></td>
            </tr>

            <tr>
                <th>title: </th>
                <td><input type="text" name="boards[title]" value="{{ old('boards.title') }}" ></td>
            </tr>

            <tr>
                <th>message: </th>
                <td><input type="text" name="boards[message]" value="{{ old('boards.message') }}"></td>
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
