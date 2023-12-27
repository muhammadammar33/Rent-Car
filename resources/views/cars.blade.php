<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Cars</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="JS/script.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="text-center">Cars</h1>                

                <div>Search Car: 
                    <input id="search" type="text" placeholder="Enter Car Model" onkeyup="suggest()">
                    <ul id="carlist"></ul>
                </div>

                <a href="/addnewcar" class="btn btn-success btn-sm mb-3">Add new</a>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Model</th>
                        <th>Make</th>
                        <th>Year</th>
                        <th>Color</th>
                        <th>Number</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>View</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    @foreach ($data as $id=>$car)
                        <tr>
                            <td>{{$car->id}}</td>
                            <td>{{$car->Model}}</td>
                            <td>{{$car->Make}}</td>
                            <td>{{$car->Year}}</td>
                            <td>{{$car->Color}}</td>
                            <td>{{$car->Number}}</td>
                            <td>{{$car->Price}}</td>
                            <td><img src="cars/{{$car->Pic}}" height="50px" width="50px"></td>
                            <td><a href="{{ route('viewCar', $car->id) }}" class="btn btn-primary btn-sm">View</a></td>
                            <td><a href="{{ route('deleteCar', $car->id) }}" class="btn btn-danger btn-sm">Delete</a></td>
                            <td><a href="{{ route('updateCarPage', $car->id) }}" class="btn btn-warning btn-sm">Update</a></td>
                        </tr>
                    @endforeach
                </table>
                <a href="/admindashboard"><button class="btn btn-success btn-sm mb-3">Back</button></a>
            </div>
        </div>
    </div>
</body>
</html>