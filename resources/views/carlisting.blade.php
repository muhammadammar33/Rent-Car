<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Listings</title>
    <script src="JS/script.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        .search{
            margin-top: 10px;
        }

        .car-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }

        .car-card {
            width: 300px;
            margin: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .car-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .car-details {
            padding: 15px;
        }

        .car-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .car-info {
            display: flex;
            justify-content: space-between;
        }

        .rental-price {
            color: #3498db;
            font-weight: bold;
        }

        a{
            text-decoration: none;
        }
    </style>
</head>
<body>

    <header>
        <h1>Car Listings</h1>
    </header>

    <div class="search">Search Car: 
        <input type="text" id="search" onkeyup=search()>
        <ul id="carList">
            
        </ul>
    </div>

    <div id="car-container" class="car-container">
        <!-- Car Card 1 -->
        @foreach ($data as $id=>$car)
        <a href="{{ route('viewCar', $car->id) }}">
            <div class="car-card">
                <img src="cars/{{$car->Pic}}" height="200px" width="100%">
                <div class="car-details">
                    <div class="car-title">{{$car->Make}} {{$car->Model}}</div>
                    <div class="car-info">
                        <div>Model Year: {{$car->Year}}</div>
                        <div class="rental-price">{{$car->Price}}/day</div>
                    </div>
                </div>
            </div>
        </a>
        
        @endforeach
        <!-- Car Card 2 -->
        {{-- <div class="car-card">
            <img src="./images/sample.jpg" alt="Car 2">
            <div class="car-details">
                <div class="car-title">Honda Civic</div>
                <div class="car-info">
                    <div>Model Year: 2021</div>
                    <div class="rental-price">$45/day</div>
                </div>
            </div>
        </div> --}}

        <!-- Add more car cards as needed -->
    </div>

</body>
</html>