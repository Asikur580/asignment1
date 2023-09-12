<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Info</title>
    <style>
        .header{
            width:600px;
            margin:auto;
        }
        .header a{
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px;
            text-decoration: none;
            background:black;
        }
        .container{
            width:700px;
            height:auto;           
            margin:auto;
            font-size:20px;
        }
        .show{
            font-size: 30px;
            line-height:1.6;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="personal_info.php">Task 1</a>
        <a href="temperature_converter.php">Task 2</a>
        <a href="grade_calculator.php">Task 3</a>
        <a href="even_odd_checker.php">Task 4</a>
        <a href="weather_report.php">Task 5</a>
        <a href="comparison_tool.php">Task 6</a>
        <a href="simple_calculator.php">Task 7</a>
    </div>
    <div class="container">
        <h1>Personal Info</h1>
        <div class="show">
        <?php

        $name = "Asikur Rahman";
        $age = 22;
        $country = "Bangladesh";
        $introduction = "Hello,this is Asikur Rahman. I live in Rajshahi. I am 22 years old. I am study in Bangladesh polytechnic institute.";



        echo "Name : $name <br>";
        echo "Age : $age <br>";
        echo "Country : $country <br>";
        echo "My Self : $introduction";
        ?>
    </div>
    </div>
    
</body>
</html>



