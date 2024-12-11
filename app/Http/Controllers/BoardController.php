<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index(Request $request)
    {
        //$items = Board::all();N+1問題によりデータベース側に負担がかかる。
        $items = Board::with('person')->get();
        return view('board.index', ['items' => $items]);
    }

    public function show($id)//showアクション(アドレスにid入力で表示)
    {
        $items = Board::find($id);
        return view('board.show')->with('items', $items);
    }

    public function add(Request $request)
    {
        return view('board.add');
    }

    public function createadd(Request $request)
    {
        $request->validate(Board::$rules);
        $board = new Board;
        $form = $request->all();
        unset($form['_token']);
        $board->fill($form)->save();
        return redirect('/board');
    }

    public function create(Request $request)
    {
        $request->validate(Board::$rules);
        $board = new Board;
        $form = $request->all();
        unset($form['_token']);
        $board->fill($form)->save();
        $person_id = $form['person_id'];///////
        return redirect()->route('person.show', ['person' => $person_id]);/////
    }
}
