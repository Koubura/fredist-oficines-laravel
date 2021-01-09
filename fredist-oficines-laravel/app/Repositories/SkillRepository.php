<?php


namespace App\Repositories;


use App\Models\Skill;

class SkillRepository
{

    public static function index() {
        return Skill::all();
    }

    public static function store(array $data) {
        return Skill::create($data);
    }

    public static function show($id) {
        return Skill::findOrFail($id);
    }

    public static function update($id, array $data) {
        $skill = Skill::findOrFail($id);
        $skill->update($data);
        $skill->refresh();
        return $skill;
    }

    public static function destroy($id) {
        $skill = Skill::findOrFail($id);
        $skill->delete();
        return $skill;
    }


}
