<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Repositories\SkillRepository;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api');
    }

    public function index()
    {
        try {
            $data = SkillRepository::index();
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
            $data = SkillRepository::store($request->all());
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 400);
        }

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Skill $skill)
    {
        try {
            $data = $skill;
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 400);
        }

        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Skill $skill)
    {
        try {
            $data = SkillRepository::update($skill->id, $request->all());
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 400);
        }

        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Skill $skill)
    {
        try {
            $data = SkillRepository::delete($skill->id);
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 400);
        }

        return response()->json($data);
    }
}
