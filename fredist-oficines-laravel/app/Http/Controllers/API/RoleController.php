<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Repositories\RoleRepository;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api');
    }

    public function index()
    {
        try {
            $data = RoleRepository::index();
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
            $data = RoleRepository::store($request->all());
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 400);
        }

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Role $role)
    {
        try {
            $data = $role;
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 400);
        }

        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Role $role)
    {
        try {
            $data = RoleRepository::update($role->id, $request->all());
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 400);
        }

        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Role $role)
    {
        try {
            $data = RoleRepository::destroy($role->id);
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 400);
        }

        return response()->json($data);
    }
}
