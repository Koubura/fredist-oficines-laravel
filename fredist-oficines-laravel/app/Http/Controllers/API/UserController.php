<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        try {
            $data = UserRepository::index();
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 400);
        }

        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        try {
            $data = UserRepository::store($request->all());
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 400);
        }

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(User $user)
    {
        try {
            $data = $user;
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 400);
        }

        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, User $user)
    {
        try {
            $data = UserRepository::update($user->id, $request->all());
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 400);
        }

        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(User $user)
    {
        try {
            $data = UserRepository::delete($user->id);
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 400);
        }

        return response()->json($data);
    }
}
