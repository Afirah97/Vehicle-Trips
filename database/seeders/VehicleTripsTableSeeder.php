<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class VehicleTripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Load JSON data
        $json = File::get(public_path('vehicle-trip-20180105.json'));
        $data = json_decode($json, true);

        // Insert data into the database
        foreach ($data as $trip) {
            DB::table('vehicle_trips')->insert([
                'trip_id' => $trip['trip_id'],
                'vehicle_id' => $trip['vehicle_id'],
                'start_time' => $trip['start_time'],
                'end_time' => $trip['end_time'],
                'distance' => $trip['distance'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
