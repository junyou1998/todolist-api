<?php

namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        return response()->json([
            'data'=>Todo::all()
        ]);
    }
    public function show(Todo $todo)
    {
        return response()->json($todo, 200);
    }
    public function store(Request $request){

       $todo = Todo::create($request->all());

       return response()->json($todo,201);
    }

    public function update(Request $request,$todo_id)
    {
        $todo = Todo::where('id',$todo_id)->update($request->all());
        return response()->json($todo, 200);
    }

    public function delete(Todo $todo)
    {
        $todo->delete();

        return response()->json(null, 204);
    }
}
