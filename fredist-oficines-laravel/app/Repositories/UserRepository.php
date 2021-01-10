<?php


namespace App\Repositories;


use App\Models\User;

class UserRepository
{

    public static function index() {
        return User::all();
    }

    public static function store(array $data) {
        $data['password'] = bcrypt($data['password']);
        return User::create($data);
    }

    public static function show($id) {
        return User::findOrFail($id);
    }

    public static function update($id, array $data) {
        $data['password'] = bcrypt($data['password']);
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
