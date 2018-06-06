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
        <?php foreach($routeData as $routeGroup) {
                foreach($routeGroup as $route) {
                    $routeName = '';
                    if ($route->attributes->long_name !== '') {
                        $routeName = $route->attributes->long_name;
                    } else {
                        $routeName = $route->attributes->description . ' ' . $route->attributes->short_name;
                    }
                    ?>
                    <tr>
                        <td style="background-color: #{{$route->attributes->color}}">
                            <a style="color: #{{ $route->attributes->text_color}};"
                               href="/schedule/{{ $route->id }}">
                                {{ $routeName }}
                            </a>
                        </td>
                    </tr>
        <?php
                }
            }
        ?>
        </table>
    </body>
</html>
