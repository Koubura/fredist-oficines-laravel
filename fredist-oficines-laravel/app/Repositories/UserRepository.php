<?php


namespace App\Repositories;


use App\Models\User;

class UserRepository
{

    public static function index() {
        return User::all();
    }

    public static function store(array $data) {
        return User::create($data);
    }

    public static function show($id) {
        return User::findOrFail($id);
    }

    public static function update($id, array $data) {
        $user = User::findOrFail($id);
        $user->update($data);
        $user->refresh();
        return $user;
    }

    public static function destroy($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return $user;
    }


}
