<?php


namespace App\Repositories;


use App\Models\Role;

class RoleRepository
{

    public static function index() {
        return Role::all();
    }

    public static function store(array $data) {
        return Role::create($data);
    }

    public static function show($id) {
        return Role::findOrFail($id);
    }

    public static function update($id, array $data) {
        $role = Role::findOrFail($id);
        $role->update($data);
        $role->refresh();
        return $role;
    }

    public static function destroy($id) {
        $role = Role::findOrFail($id);
        $role->delete();
        return $role;
    }

    public static function findByName($name) {
        return Role::where('name','=',$name)->first();
    }


}
