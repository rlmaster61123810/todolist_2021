<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    public function index()
    {
        $todolists = todolist::all();
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
    public function destroy(todolist $todolists)
    {
        $todolists->delete();
        return back();
    }
}
