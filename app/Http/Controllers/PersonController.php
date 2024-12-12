<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        $items = Person::all();
        return view('person.index', ['items' => $items]);
    }

    public function show(Person $person)//showアクション(アドレスにid入力で表示)
    {
        $boards = $person->boards;
        return view('person.show', compact('person', 'boards'));
    }

    public function find(Request $request)
    {
        return view('person.find', ['input' => '']);
    }
    public function search(Request $request)
    {
        $min = $request->input * 1;
        $max = $min + 10;
        $item = Person::ageGreaterThan($min)->ageLessThan($max)->first();
        $param = ['input' => $request->input, 'item' => $item];
        return view('person.find', $param);
    }
    public function add(Request $request)
    {
        return view('person.add');
    }

    public function create(Request $request)
    {
        $request->validate(Person::$rules);//リスト6-20よりエラーになるので34行少し変更
        $person = new Person;
        $form = $request->all();
        unset($form['__token']);
        $person->fill($form)->save();
        return redirect('/person');
    }

    public function add2(Request $request)
    {
        return view('person.add2');
    }

    public function store(Request $request)
    {
        $request->validate(Person::$rules);
        $person = new Person;
        $form = $request->all();
        $person->fill($form)->save();

        if (isset($form['boards'])){
            $board = $form['boards'];
                $person->boards()->create($board);
        }
        /*$person_id = $form['person_id'];*/
        return redirect()->route('person.show', ['id' => $person->id]);
    }
}
