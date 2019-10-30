<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<h1 class="text-center">cars</h1>

<div class="container">
    <div class="row">

        @foreach($cars as $car)
            <div class="col col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{$car->img}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 c
                            lass="card-title">{{$car->brand}}</h5>
                        <h5 class="card-title">{{$car->carName}}</h5>
                        <h5 class="card-title">{{$car->model}}</h5>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>

</body>
</html>
