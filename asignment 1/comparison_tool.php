<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparision Tool</title>

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
            width:460px;
            height:auto;           
            margin:auto;
            font-size:20px;
        }
        .input1{
            padding:10px;
            width:200px;
        }
        .input2{
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
            margin-top:10px;
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

    <h1>Comparision Tool</h1>
    
        <form action="" method="POST">

            <input type="number" placeholder="Enter Your 1st number" class="input1" name="input1" required>
            <input type="number" placeholder="Enter Your 2nd number" class="input2" name="input2" required>

            <button class="btn">Result</button>

        </form> 
        
        <div class="output">
            <span>
                <?php
                
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $input1 = $_POST["input1"];
                    $input2 = $_POST["input2"];

                    echo "1st number is : $input1 <br> 2nd number is : $input2 <br>";

                    $result = ($input1>$input2) ?"The largest number is : $input1":"The largest number is : $input2";
                    echo $result;
                }

                ?>
            </span>
        </div>
    </div>

</body>
</html>