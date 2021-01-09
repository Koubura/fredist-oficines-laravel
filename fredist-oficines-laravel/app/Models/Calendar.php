<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'day', 'start_time', 'end_time'
    ];

    protected $appends = [
      'dayOfTheWeek'
    ];

    protected function getDayOfTheWeekAttribute() {
        $day = Carbon::createFromFormat('Y-m-d',$this->day)->dayOfWeek;

        $days = [
            0 => 'DIUMENGE',
            1 => 'DILLUNS',
            2 => 'DIMARTS',
            3 => 'DIMECRES',
            4 => 'DIJOUS',
            5 => 'DIVENDRES',
            6 => 'DISSABTE',
        ];

        return $days[$day];
    }
}
