<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    public function index()
    {
        $todolists = Todolist::all();
        return view('home', ['todolists' => $todolists]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $todolist = new Todolist();
        $todolist->content = $request->content;
        $todolist->save();
        return redirect('/');
    }
    public function edit($todolist_id)
    {
        $todolist = Todolist::find($todolist_id);
        $data = [
            'todolist' => $todolist,
        ];

        return view('edit', $data);
    }
    public function delete($id)
    {
        $todolist = Todolist::find($id);
        $todolist->delete();
        return redirect('/');
    }
}
