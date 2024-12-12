@extends('layouts.helloapp')

@section('title', 'Person.add2')

@section('menubar')
    @parent
    投稿ページ
@endsection

@section('content')

    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('person.add2') }}" method="post">
        <table>
            @csrf

            <tr>
                <th>name: </th>
                <td><input type="text" name="name" value="{{ old('name') }}"></td>
            </tr>

            <tr>
                <th>mail: </th>
                <td><input type="text" name="mail" value="{{ old('mail') }}"></td>
            </tr>

            <tr>
                <th>age: </th>
                <td><input type="numbar" name="age" value="{{ old('age') }}"></td>
            </tr>

            <tr>
                <th>aaaa: </th>
                <td><input type="text" name="aaaa" value="{{ old('aaaa') }}"></td>

            <tr>
                <th>title: </th>
                <td><input type="text" name="boards[title]" value="{{ old('boards.title') }}"></td>
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
