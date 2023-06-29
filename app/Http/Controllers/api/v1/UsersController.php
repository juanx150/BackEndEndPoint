<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller //GET users
{
    public function index()
    {
        // ordenar a las bases de datos(get)
        $users = User::orderBy('name','asc')->get();
        //usuario recibe las respuestas response
        return response()->json([
            'data' => $users
        ], 200);

    }
//-----------------------------------------------------------------------------
    public function store(Request $request)    //POST users crear/publicar
    {
        // ese metodo es estatico
        // es un metodo instancia
        $users = User::create($request->all());

        return response()->json(['data' => $users], 201);
    }
//--------------------------------------------------------------------------
    public function show(User $user)
    {
        return response()->json(['data' => $user], 200);
    } 
//-----------------------------------------------------------------------------
    public function update(Request $request, User $user) //PUT users/:id
    {
        $user->update($request->all());

        return response()->json(['data' => $user], 200);
       
    }
//-----------------------------------------------------
    public function destroy(User $user) //DELETE users/:id
    {
        $user->delete();
         return response(null, 204);

    }

}
