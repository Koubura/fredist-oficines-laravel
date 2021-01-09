<?php


namespace App\Repositories;


use App\Models\Calendar;

class CalendarRepository
{

    public static function index() {
        return Calendar::all();
    }

    public static function store(array $data) {
        return Calendar::create($data);
    }

    public static function show($id) {
        return Calendar::findOrFail($id);
    }

    public static function update($id, array $data) {
        $calendar = Calendar::findOrFail($id);
        $calendar->update($data);
        $calendar->refresh();
        return $calendar;
    }

    public static function destroy($id) {
        $calendar = Calendar::findOrFail($id);
        $calendar->delete();
        return $calendar;
    }


}
