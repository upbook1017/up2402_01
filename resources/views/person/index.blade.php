@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
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
    </table>

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

    <table>
        <tr>
            <th>Person</th>
            <th>Board</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->getData() }}</td>
                <td>
                    <!--@if ($item->board != null)
    {{ $item->board->getData() }}
    @endif   hasOne結合の表示コード-->
                    @if ($item->boards != null)
                        <table widht="100%">
                            @foreach ($item->boards as $obj)
                                <tr>
                                    <td>{{ $obj->getData() }}</td>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </td>
            </tr>
        @endforeach
        </tabele>
    @endsection

    @section('footer')
        upbook1017
    @endsection
