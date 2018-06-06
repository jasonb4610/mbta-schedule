<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MBTA Routes and Schedules</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


</head>
<body>
<table border="1">
    <thead>
        <th>Arrival Time</th>
        <th>Departure Time</th>
        <th>Stop Number</th>
    </thead>
    <?php foreach($scheduleData->data as $schedule) {  ?>
    <tr>
        <td>{{ $schedule->attributes->arrival_time }}</td>
        <td>{{ $schedule->attributes->departure_time }}</td>
        <td>{{ $schedule->attributes->stop_sequence }}</td>
    </tr>
    <?php } ?>
</table>
</body>
</html>
