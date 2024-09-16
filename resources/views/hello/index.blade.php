@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックス
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <table>
        @foreach ($data as $item)
            <tr>
                <th>{{ $item['name'] }}</th>
                <td>{{ $item['mail'] }}</td>
        @endforeach
        </tr>
    </table>
@endsection

@section('footer')
    upbook1017
@endsection
