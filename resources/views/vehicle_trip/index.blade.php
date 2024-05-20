<!DOCTYPE html>
<html>
<head>
    <title>Vehicle Trips</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Vehicle Trips</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Start Datetime</th>
                    <th>End Datetime</th>
                    <th>Locations</th>
                    <th>Action</th>
                    <!--<th>Distance</th>-->
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $trip)
                    <tr>
                        <td>{{ $trip->id }}</td>
                        <td>{{ $trip->datetime }}</td>
                        <td>{{ $trip->latitude }}</td>
                        <td>{{ $trip->longitude }}</td>
                        <td>{{ $trip->speed }}</td>
                        <td>{{ $trip->distance }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/export-csv" class="btn btn-primary">Export to CSV</a>
    </div>
</body>
</html>
