<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Car Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 400px;
            padding: 20px;
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 24px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 2px;
            color: #555;
        }

        input {
            padding: 5px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* button {
            background-color: #4caf50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        } */

        button:hover {
            background-color: #45a049;
        }
        .input-submit {
            background-color: #4caf50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .input-submit:hover {
            background-color: #45a049;
        }

        .back{
            margin-left: 40%; 
        }
    </style>
</head>
<body>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="card">
        <h1>Update Car Detail</h1>

        <form action="{{ route('updateCar', $car->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="model">Model:</label>
            <input type="text" id="model" name="model" required value="{{ $car->Model }}">
            @if ($errors->has('model'))
                <span class="text-danger">{{ $errors->first('model') }}</span>
            @endif

            <label for="make">Make:</label>
            <input type="text" id="make" name="make" required value="{{ $car->Make }}">
            @if ($errors->has('make'))
                <span class="text-danger">{{ $errors->first('make') }}</span>
            @endif

            <label for="year">Year:</label>
            <input type="number" id="year" name="year" required value="{{ $car->Year }}">
            @if ($errors->has('year'))
                <span class="text-danger">{{ $errors->first('year') }}</span>
            @endif

            <label for="color">Color:</label>
            <input type="text" id="color" name="color" required value="{{ $car->Color }}">
            @if ($errors->has('color'))
                <span class="text-danger">{{ $errors->first('color') }}</span>
            @endif

            <label for="reg_number">Registration Number:</label>
            <input type="text" id="reg_number" name="number" required value="{{ $car->Number }}">
            @if ($errors->has('number'))
                <span class="text-danger">{{ $errors->first('number') }}</span>
            @endif

            <label for="rental_price">Rental Price:</label>
            <input type="number" id="rental_price" name="price" required value="{{ $car->Price }}">
            @if ($errors->has('price'))
                <span class="text-danger">{{ $errors->first('price') }}</span>
            @endif

            <label for="image">Car Image:</label>
            <input type="file" id="image" name="image" accept="image/*">
            @if ($errors->has('image'))
                <span class="text-danger">{{ $errors->first('image') }}</span>
            @endif

            <input type="submit" class="input-submit" value="Update Car">
            
        </form>
        <a href="/showCars"><button class="back input-submit">Back</button></a>
    </div>
</body>
</html>