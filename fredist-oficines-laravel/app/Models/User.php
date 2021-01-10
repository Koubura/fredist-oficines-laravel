<?php

namespace App\Models;

use App\Repositories\RoleRepository;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'surname', 'password', 'username', 'password', 'role_id', 'category', 'free_days'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token'
    ];

    protected $appends = [
        'role',
        'calendar',
        'tasks_ids'
    ];

    protected $with = [
        'skills'
    ];

    public function role() {
        return $this->belongsTo(Role::class);
    }

    public function skills() {
        return $this->belongsToMany(Task::class,'skills','user_id','task_id')->withPivot('value');;
    }

    public function calendar() {
        return $this->hasMany(Calendar::class);
    }

    public function getTasksIdsAttribute() {
        $res = [];
        foreach($this->skills as $w) {
            array_push($res, $w->id);
        }
        return $res;
    }

    public function getRoleAttribute () {
        if(!is_null($this->role_id)) return RoleRepository::show($this->role_id)->name;
        else return "Sense rol";
    }

    public function getCalendarAttribute () {
        return $this->calendar()->orderBy('day','DESC')->take(14)->get();
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
