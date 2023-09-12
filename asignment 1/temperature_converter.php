<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>

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
            width:500px;
            height:auto;           
            margin:auto;
            font-size:20px;
        }
        .unit{
            padding:10px;
            width:200px;
        }
        .input1{
            padding:10px;
            width:200px;
        }
        .output{
            margin-top:20px;            
        }
        .output span{
            width:200px;
            margin:auto;  
            line-height:1.6;         
        }
        .btn{
            padding: 10px;             
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

    <h1>Temperature Converter</h1>
    
        <form action="" method="POST">

            <select name="unit" class="unit">
                <option value="celsius">Celsius</option>
                <option value="fahrenheit">Fahrenheit</option>
            </select>

            <input type="number" placeholder="Enter Your Value" class="input1" name="input1" required>

            <button class="btn">Result</button>

        </form>
        

        <div class="output">
            <span>
            <?php
              if($_SERVER["REQUEST_METHOD"] == "POST"){
                $unit = $_POST["unit"];
                $input = $_POST["input1"];

                if($unit=="celsius" && $input>0){
                    $celsius = $input;
                    $fahrenheit = ($input * 9/5) + 32;

                    echo "Celsius: $input °C <br>";
                    echo "Fahrenheit: $fahrenheit °F"; 

                }elseif($unit=="fahrenheit" && $input>0){
                    $fahrenheit = $input;
                    $celsius = ($input - 32) * (5/9);

                    echo "Fahrenheit: $input °F <br>";
                    echo "Celsius: $celsius °C";
                    
                }
              }
                ?>
            </span>
            
        </div>


    </div>

    
   
</body>
</html>



