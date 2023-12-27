<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/styles.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <h1>{{ $car->Make }} {{ $car->Model }}</h1>
            <p>Price: <span>Rs. {{ $car->Price }} </span> </p>
        </div>

        <div class="car-img">
            <img src="/cars/{{ $car->Pic }}" width="100%" height="300px" style="border-radius: 20px";>
        </div>
    </div>

    <div class="features">
        <div class="make">
            <h3>Make</h3>
            <p>{{ $car->Make }}</p>
        </div>
        <div class="model">
            <h3>Model</h3>
            <p>{{ $car->Model }}</p>
        </div>
        <div class="year">
            <h3>Year</h3>
            <p>{{ $car->Year }}</p>
        </div>
        <div class="color">
            <h3>Color</h3>
            <p>{{ $car->Color }}</p>
        </div>
        <div class="number">
            <h3>Number</h3>
            <p>{{ $car->Number }}</p>
        </div>
    </div>

    <div class="car-detail-btn">
        <a href=" {{ route('bookCar', $car->id) }}"><button class="car-btn" type="button">Book</button></a>
        <a href="/back"><button class="car-btn" type="button">Back</button></a>
    </div>
</body>
</html>