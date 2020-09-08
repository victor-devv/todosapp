<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>Todos</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center my-5">TODOS PAGE</h1>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">
                        Todos
                    </div>
                    <div class="card-body">
                        <ul class="list-group">

                            @foreach($todos as $todo)
                            <li class="list-group-item">{{$todo->name}}</li>
                            @endforeach

                        </ul>

                    </div>
                </div>

            </div>

        </div>


    </div>
</body>

</html>