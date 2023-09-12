<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>

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
        .operator{
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

    <h1>Simple Calculator</h1>
    
        <form action="" method="POST">

            <input type="number" placeholder="Enter Your 1st number" class="input1" name="input1" required>
            <input type="number" placeholder="Enter Your 2nd number" class="input2" name="input2" required>

            <select name="operator" class="operator">
                <option value="add">Addition</option>
                <option value="sub">Subtraction</option>
                <option value="mul">Multiplication</option>
                <option value="div">Division</option>
            </select>

            <button class="btn">Result</button>

        </form> 
        
        <div class="output">
            <span>
                <?php
                
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $input1 = $_POST["input1"];
                    $input2 = $_POST["input2"];
                    $operator = $_POST["operator"];

                    switch ($operator) {
                        case "add":
                            $result = $input1 + $input2;
                            echo "$input1 + $input2 <br>";
                            echo "Result: $result";
                            break;
                        case "sub":
                            $result = $input1 - $input2;
                            echo "$input1 - $input2 <br>";
                            echo "Result: $result";
                            break;
                        case "mul":
                            $result = $input1 * $input2;
                            echo "$input1 * $input2 <br>";
                            echo "Result: $result";
                            break;
                        case "div":
                            if ($input2 != 0) {
                                $result = $input1 / $input2;
                                echo "$input1 / $input2 <br>";
                                echo "Result: $result";
                            } else {
                                echo "Cannot divide by zero.";
                            }
                            break;
                       
                    }
                }

                ?>
            </span>
        </div>
    </div>

</body>
</html>