<?php


namespace App\Repositories;


use App\Models\Task;
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
        $user = User::findOrFail($id);
        if($data['password']!=$user->password) $data['password'] = bcrypt($data['password']);
        $user->update($data);
        $user->refresh();

        if(isset($data["tasks_ids"])) {
            $user->skills()->sync($data["tasks_ids"]); //actualitzem relació
        }

        return self::show($id);
    }

    public static function destroy($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return $user;
    }

    public static function addUserTaskValue($idUser, $idTask, $value) {
        $user = self::show($idUser);
        $user->skills()->attach($idTask, ['value' => $value]);

        return self::show($idUser);
    }


}
