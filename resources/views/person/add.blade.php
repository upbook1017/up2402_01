@extends('layouts.helloapp')

@section('title', 'Person.add')

@section('menubar')
    @parent
    新規作成ページ
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
    <form action="/person/add" method="post">
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
