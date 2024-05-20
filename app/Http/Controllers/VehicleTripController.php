<?php

namespace App\Http\Controllers;

use App\Models\VehicleTrip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class VehicleTripController extends Controller
{
    public function index()
    {
        // Fetch data from database
        $data = VehicleTrip::all();

        // Pass data to the view
        return view('vehicle_trip.index', compact('data'));
    }

    public function exportCSV()
    {
        // Fetch data from database
        $data = VehicleTrip::all();

        // Create CSV
        $csvData = [];
        $header = ['ID', 'Datetime', 'Latitude', 'Longitude', 'Speed', 'Distance'];
        $csvData[] = $header;

        foreach ($data as $trip) {
            $csvData[] = [
                $trip->id,
                $trip->datetime,
                $trip->latitude,
                $trip->longitude,
                $trip->speed,
                $trip->distance
            ];
        }

        $filename = "vehicle_trips.csv";
        $handle = fopen($filename, 'w+');
        foreach ($csvData as $row) {
            fputcsv($handle, $row);
        }
        fclose($handle);

        // Return CSV file as download response
        return Response::download($filename)->deleteFileAfterSend(true);
    }
}
