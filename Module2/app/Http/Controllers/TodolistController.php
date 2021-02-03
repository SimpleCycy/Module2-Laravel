<?php

namespace App\Http\Controllers;

use App\Models\todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    public function showAllData()
    {
        return view('fetchedData')->with('toDoArr', todolist::all());
    }

    public function delete(Request $request, $id)
    {
        $todolist = todolist::find($id);
        $todolist->delete();
        return redirect('/');
    }

    public function create()
    {
        return view('createView');
    }

    public function insertTodo(Request $request)
    {
        $todolist = new todolist;
        $todolist->name = $request->input('name');
        $todolist->save();
        return redirect('/');
    }

    public function edit($id)
    {
        return view('editTodo')->with('toDoArr', todolist::find($id));
    }

    public function editTodo(Request $request, $id)
    {
        $todolist = todolist::find($id);
        $todolist->name = $request->input('name');
        $todolist->save();
        return redirect('/');
    }
}
