<?php

namespace App\Http\Controllers;

use App\TodoItem;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class TodoItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // TodoItemの全レコード取得
        $items = TodoItem::all();
        return view('todo.index',['items'=>$items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // ↓本来はstoreメソッドに書くべきだったかも？
    public function create(Request $request)
    {
        $this->validate($request,TodoItem::$rules);
        $todoitem = new TodoItem;
        $form = $request->all();
        unset($form['_token']);
        $todoitem->fill($form)->save();
        return redirect('/todo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $todoitem=Todoitem::find($request->id);
        $progress = $todoitem->progress;
        $todoitem->progress =! $progress;
        $todoitem->save();
        return redirect('/todo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        TodoItem::find($request->id)->delete();
        // DB::update('update sqlite_sequence set seq=0 where name="todo_items"');
        // DB::delete('delete from sqlite_sequence  where name = "todo_items"');
        // DB::update('UPDATE todo_items SET id=  WHERE name=todo_items');
        // DB::update('update todo_items set id=ROWID');
        // DB::table('todo_items')->increment('id');
        // DB::table('todo_items')->truncate();
        return redirect('/todo');
    }
}
