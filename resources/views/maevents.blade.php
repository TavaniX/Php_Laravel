<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
              integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Events</title>
        <style>
            body{
                background-color: #454d55;
            }
        </style>
    </head>
    <body>
        <table class="table table-dark table-hover">
            <h1 style="text-align: center; color: white;">Movies</h1><br />
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" class="text-center">Movie title</th>
                    <th scope="col" class="text-center">Movie description</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $d)
                    <tr>
                        <th>{{$d['id']}}</th>
                        <td>{{$d['eventName'] ?? ''}}</td>
                        <td>{{$d['eventDescription']}}</td>
                        <td><a href="/ma/movies/selectedMovie/{{$d['id']}}" class="badge badge-primary">More details</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </body>
</html>

