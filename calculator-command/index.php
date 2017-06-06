<?php
    require 'Calculator.php';
    require 'AddOperator.php';
    require 'SubOperator.php';

    $result = null;
    $firstNumber = 0;
    $secondNumber = 0;
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $firstNumber = $_POST['firstNumber'];
        $secondNumber = $_POST['secondNumber'];
        $operator = $_POST['operator'];

        switch ($operator){
            case  '+':
                $calculator = new Calculator(new AddOperator());
                break;
            case  '-':
                $calculator = new Calculator(new SubOperator());
                break;
        }
        $result = $calculator->execute($firstNumber, $secondNumber);
    }
?>
<html>
    <head>
        <title>Calculator Demo</title>
    </head>
    <body>
        <form method="post">
            <fieldset>
                <legend>Simple Calculator</legend>
                <table>
                    <tr>
                        <td>First number:</td>
                        <td><input type="text" name="firstNumber" value="<?=$firstNumber?>"/></td>
                    </tr>
                    <tr>
                        <td>Operator:</td>
                        <td>
                            <select name="operator">
                                <option value="+">Addiction (+)</option>
                                <option value="-">Subtraction (-)</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Second number:</td>
                        <td><input type="text" name="secondNumber" value="<?=$secondNumber?>"/></td>
                    </tr>
                    <tr>
                        <td>Result:</td>
                        <td><h3><?=$result?></h3></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Calculate"/>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>