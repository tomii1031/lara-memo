<?php

namespace App\Http\Controllers;

use App\Memo;
use App\Http\Requests\MemoRequest;
use Illuminate\Http\Request;

class MemoController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Memo::class, 'memo');
    }


    public function index()
    {
        $memos = Memo::all()
        ->sortByDesc('cerated_at');

        return view('memos.index', ['memos' => $memos]);
    }

    public function create()
    {
        return view('memos.create');
    }

    public function store(MemoRequest $request, Memo $memo)
    {

        $memo->fill($request->all());
        $memo->user_id = $request->user()->id;
        $memo->save();
        return redirect()->route('memos.index');

    }

    public function edit(Memo $memo)
    {
        return view('memos.edit',['memo' => $memo]);
    }

    public function update(MemoRequest $request, Memo $memo)
    {
        $memo->fill($request->all())->save();
        return redirect()->route('memos.index');
    }

    public function destroy(Memo $memo)
    {
        $memo->delete();
        return redirect()->route('memos.index');
    }

    public function show(Memo $memo)
    {
        return view('memos.show',['memo'=> $memo]);
    }
}
