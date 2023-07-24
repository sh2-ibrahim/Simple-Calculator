<?php
$first_input = "";
$sec_input = "";
$mul = "";
$plus = "";
$min = "";
$div = "";
$result = "";
if(isset($_POST["mul"]))
{
    $first_input = $_POST ["first"];
    $sec_input = $_POST ["second"];
    $result = $first_input * $sec_input;
}
if(isset($_POST["plus"]))
{
    $first_input = $_POST ["first"];
    $sec_input = $_POST ["second"];
    $result = $first_input + $sec_input;
}
if(isset($_POST["min"]))
{
    $first_input = $_POST ["first"];
    $sec_input = $_POST ["second"];
    $result = $first_input - $sec_input;
}
if(isset($_POST["div"]))
{
    $first_input = $_POST ["first"];
    $sec_input = $_POST ["second"];
    $result = $first_input / $sec_input;
}
?>
<!DOCTYPE html>
<html >
<head>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #8da6f7;
        }

        .calculator {
            padding: 100px;
            align-items: center;
        }

        td{ 
            border: 2px solid;
            text-align: center;
        }

        table{
            
            border-style: solid;
            height: 500px;
            width: 100%;
            background-color: #d0d8f2;
        } 

        h1{
            text-align: center;
        }
        
    </style>
<title>SIMPLE CALCULATOR</title>
</head>

<body>
    <form method = "POST" action = "Simple calculator.php">
        <div class="calculator">
        <table>
            <thead>
                <h1>Simple Calculator</h1>
            </thead>
            <tr >
                <td> 
                    <p1>Input first number:</p1>
                    <input type="number" name = "first" value=<?php echo $first_input;?>> 
                </td>           
            </tr>
            <tr >
                <td>
                <p1>Input second number:</p1>
                     <input type="number" name = "second" value=<?php echo $sec_input;?>> 
                </td>           
            </tr>
            <tr >
                 <td>
                    <Button value = "convert" name = "plus">+</button>
                    <Button value = "convert" name = "min">-</button>
                    <Button value = "convert" name = "mul">*</button>
                    <Button value = "convert" name = "div">/</button>
                 </td>
            </tr>
            <tr>
                <td>
                    <p1>Result:</p1>
                    <input type="number" name = "result" value ="<?php echo $result;?>" disabled  >
                </td>          
            </tr>
            <tr>
                <td>
                    <button type="reset"  name = "Reset"> RESET </button>

                    </td>
            </tr>       
        </table>
        </div>
    </form>
</body>
</html>