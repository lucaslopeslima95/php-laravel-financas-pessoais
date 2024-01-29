<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;

class UserController extends Controller
{
    public function index(){
        $users = User::paginate();
        return UserResource::collection($users);
    }

    public function create(CreateUserRequest $request){
        $data = $request->validated();
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
        return new UserResource($user);
     }


    public function findById(string $id){
        $user = User::findOrFail($id);
        return new UserResource($user);
    }


    public function update(Request $request,$id){
        $user = User::findOrFail($id);
        $data = $request->all();

        if($request->password){
            $data['password'] = bcrypt($request->password);
        }

        $user->update($data);

        return new UserResource($user);
    }

    public function delete(string $id){
        User::findOrFail($id)->delete();
        return response()->json([],HttpResponse::HTTP_NO_CONTENT);
    }

}
