<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return response()->json([
            'data' => Todo::all()
        ]);
    }
    public function show($id)
    {
        $todo = Todo::find($id);
        return response()->json(['data'=>$todo], 200);
    }
    public function store(Request $request)
    {

        $todo = Todo::create($request->all());

        return response()->json($todo, 201);
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::find($id)->update($request->all());
        return response()->json($todo, 200);
    }

    public function delete($id)
    {
        $todo = Todo::find($id);
        $todo->delete();

        return response()->json(null, 204);
    }
}
