<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use App\Models\ScheduleDetail;
use App\Models\User;
use Illuminate\Http\Request;


class AbsenController extends Controller
{
    public function absen(Request $request)
    {
        $request->validate([
            'rfid' => ['required'],
            'date' => ['required'],
        ]);

        $user = User::with('classroom')->where("rfid", $request->rfid)->first();
        
        if ($user == null) {
            return "User Tidak ditemukan";
        } 

        $schedule = Schedule::where('classrooms_id', $user->classroom->first()->id)->where('date', $request->date)->first();

        if ($schedule) {
            $data = ScheduleDetail::where("users_id", $user->id)->where("schedules_id", $schedule->id)->first();
            
            if ($data) {
                return 'Sudah Absen';
            } else {
                $detail = ScheduleDetail::create([
                    'name' => $user->name,
                    'schedules_id' => $schedule->id,
                    'users_id' => $user->id,
                    'presence' => "Hadir",
                ]);

                if ($detail == null) {
                    return "Error";
                } 

                return 'OK';
            }
        }

        return "Tidak Ada Jadwal";
    }
}
