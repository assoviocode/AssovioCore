<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{

    protected $classModel;

    public function index()
    {
        return $this->classModel::all();
    }

    public function store(Request $request)
    {
        return response()->json($this->classModel::create($request->all()), 201);
    }

    public function show(int $id)
    {
        $resource = $this->classModel::find($id);
        if (is_null($resource)) {
            return response()->json('', 204);
        }
        return response()->json($resource);
    }

    public function update(int $id, Request $request)
    {
        $resource = $this->classModel::find($id);
        if (is_null($resource)) {
            return response()->json([
                "Error" => "Recurso não encontrado"
            ], 404);
        }
        $resource->fill($request->all());
        $resource->save();
        return $resource;
    }

    public function destroy(int $id)
    {
        if ($this->classModel::destroy($id) == 0) {
            return response()->json([
                "Error" => "Recurso não encontrado"
            ], 404);
        }
        return response()->json();
    }
}
