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
        <table>
        <?php foreach($routeData->data as $route) { ?>
            <tr>
                <td><a style="color: {{ $route->attributes->text_color}}; background-color: {{$route->attributes->color}}" href="/schedule/{{ $route->id }}">{{ $route->attributes->long_name }}</a></td>
            </tr>
        <?php } ?>
        </table>
    </body>
</html>
