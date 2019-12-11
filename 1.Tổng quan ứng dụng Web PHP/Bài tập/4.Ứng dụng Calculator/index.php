<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>

<body>
    <form method="post">
        <h1>Simple Calculator</h1>
        <fieldset style="width: 20%;">
            <legend>Calculator</legend>
            <table>
                <tr>
                    <td>
                        <label>First operand: </label>
                    </td>
                    <td>
                        <input type="number" name="firstoperand" pattern="/^[0-9]$/">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Operator</label>
                    </td>
                    <td>
                        <select name="ops">
                            <option value="plus">Addition</option>
                            <option value="minus">Subtraction</option>
                            <option value="multiply">Multiplication</option>
                            <option value="divide">Division</option>
                        </select><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Second operand: </label>
                    </td>
                    <td>
                        <input type="number" name="secondoperand" pattern="/^[0-9]$/"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input type="submit" value="Calculate"><br>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $firstOperand = $_POST["firstoperand"];
        $secondOperand = $_POST["secondoperand"];
        $ops = $_POST["ops"];
        $result;
        switch ($ops) {
            case "plus":
                $result = $firstOperand + $secondOperand;
                break;
            case "minus":
                $result = $firstOperand - $secondOperand;
                break;
            case "multiply":
                $result = $firstOperand * $secondOperand;
                break;
            case "divide":
                if ((float) $secondOperand === 0) {
                    $result = "Wrong input. Cannot divide by zero";
                } else {
                    $result = $firstOperand / $secondOperand;
                    break;
                }
        }
        echo $result;
    }
    ?>
</body>

</html>