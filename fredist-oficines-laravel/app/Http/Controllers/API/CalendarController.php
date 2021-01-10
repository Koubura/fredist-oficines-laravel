<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Calendar;
use App\Repositories\CalendarRepository;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api');
    }

    public function index(Request $request)
    {
        try {
            $data = CalendarRepository::index($request->query());
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
            $data = CalendarRepository::store($request->all());
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 400);
        }

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Calendar  $calendar
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Calendar $calendar)
    {
        try {
            $data = $calendar;
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 400);
        }

        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Calendar  $calendar
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Calendar $calendar)
    {
        try {
            $data = CalendarRepository::update($calendar->id, $request->all());
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 400);
        }

        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Calendar  $calendar
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Calendar $calendar)
    {
        try {
            $data = CalendarRepository::destroy($calendar->id);
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 400);
        }

        return response()->json($data);
    }
}
