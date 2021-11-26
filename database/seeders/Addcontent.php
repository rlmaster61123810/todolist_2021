<?php

namespace Database\Seeders;

use App\Models\Todolist;
use Illuminate\Database\Seeder;

class Addcontent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $todolist = new Todolist();
        $todolist->content = 'This is a test content';
        $todolist->save();
    }
}
