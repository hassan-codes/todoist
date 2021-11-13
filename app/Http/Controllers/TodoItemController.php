<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoItem;

class TodoItemController extends Controller
{
    public function index() {
        return view('welcome', ['todoItems' => TodoItem::all()]);
    }
    
    public function saveItem(Request $request) {
        
        $todoItem = new TodoItem();
        $todoItem->todo = $request->todoItem;
        $todoItem->is_complete = 0;
        $todoItem->save();
        
        return redirect('/');
    }
}
