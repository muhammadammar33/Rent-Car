<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Bookings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="JS/script.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="text-center">Bookings</h1>

                <table class="table table-bordered table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Make</th>
                        <th>Model</th>
                        <th>Date</th>
                        <th>Days</th>
                        <th>Paymentmethod</th>
                        {{-- <th>Year</th> --}}
                        {{-- <th>Color</th> --}}
                        {{-- <th>Number</th> --}}
                        {{-- <th>Price</th> --}}
                        {{-- <th>Image</th> --}}
                        <th>View</th>
                        <th>Delete</th>
                    </tr>
                    @foreach ($data as $id=>$booking)
                        <tr>
                            <td>{{$booking->id}}</td>
                            <td>{{$booking->make}}</td>
                            <td>{{$booking->model}}</td>
                            <td>{{$booking->date}}</td>
                            <td>{{$booking->days}}</td>
                            <td>{{$booking->paymentmethod}}</td>
                            {{-- <td>{{$car->Year}}</td>
                            <td>{{$car->Color}}</td>
                            <td>{{$car->Number}}</td>
                            <td>{{$car->Price}}</td> --}}
                            {{-- <td><img src="cars/{{$car->Pic}}" height="50px" width="50px"></td> --}}
                            <td><a href="{{ route('viewBooking', $booking->model) }}" class="btn btn-primary btn-sm">View</a></td>
                            <td><a href="{{ route('deleteBooking', $booking->id) }}" class="btn btn-danger btn-sm">Delete</a></td>
                        </tr>
                    @endforeach
                </table>
                <a href="/admindashboard"><button class="btn btn-success btn-sm mb-3">Back</button></a>
            </div>
        </div>
    </div>
</body>
</html>