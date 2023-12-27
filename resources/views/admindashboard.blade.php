<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: black;
        }

        h1 {
            text-align: center;
            color: red;
        }

        .options-container {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
        }

        .option {
            width: 25%;
            text-align: center;
            padding: 20px;
            margin: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            background-color: red;
        }

        .option:hover {
            background-color: rgb(65, 63, 63);
        }

        .log {
            width: 100%;
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .logout {
            color: red;
            background-color: rgb(65, 63, 63);
            height: 30px;
            width: 80px;
            border-radius: 5px;
            border: none;
            border: 5px solid red;
            border-radius: 10px;
            height: 40px;
        }

        .logout:hover {
            color: rgb(65, 63, 63);
            background-color: red;
            height: 30px;
            width: 80px;
            border-radius: 5px;
            border: none;
            border: 5px solid rgb(65, 63, 63);
            border-radius: 10px;
            height: 40px;
        }
    </style>
</head>
<body>

    <h1>Admin Dashboard</h1>

    <div class="options-container">
        <div class="option" onclick="location.href='/addnewcar'">
            <h2>Add New Car</h2>
        </div>

        <div class="option" onclick="location.href='/showCars'">
            <h2>View Cars</h2>
        </div>

        <div class="option" onclick="location.href='/showBookings'">
            <h2>View Bookings</h2>
        </div>
    </div>
    <div class="log">
        <a href="/adminlogout"><button class="logout">Logout</button></a>
    </div>
    

</body>
</html>