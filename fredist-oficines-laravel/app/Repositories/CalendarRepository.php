<?php


namespace App\Repositories;


use App\Models\Calendar;
use Carbon\Carbon;

class CalendarRepository
{

    public static function index(array $params = []) {
        if(isset($params['day']) && trim($params['day'])!="") {
            $day = $params['day'];
            $c = Calendar::whereDate("day", $day)->get();
            return [
                "calendars" => $c,
                "chart" => self::returnToGraph($c)
            ];
        }
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

    public static function returnToGraph($calendar) {
        $result = [];
        foreach ($calendar as $c) {
            $element = [
                "name" => $c['userName'],
                "series" => [
                    [
                        "name" => "transparent",
                        "value" => (int)(date('H',strtotime($c['start_time'])) . date('i',strtotime($c['start_time'])) . date('s',strtotime($c['start_time'])))
                    ],
                    [
                        "name" => "periode",
                        "value" => (int)(date('H',strtotime($c['end_time'])) . date('i',strtotime($c['end_time'])) . date('s',strtotime($c['end_time'])))
                    ]
                ]
            ];

            array_push($result,$element);
        }
        return $result;
    }
}
