<?php
if(isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['oper'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $oper = $_GET['oper'];
    $result = '';
    switch($oper) {
        case '+':
            $result = $num1 + $num2;
            break;
            case '-':
                $result = $num1 - $num2;
                break;
                case '*':
                    $result = $num1 * $num2;
                    break;
                    case '/':
                        $result = $num1 / $num2;
                        break;
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        body {
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background:rgb(146, 148, 145);
        }
        input,select, button {
            background:rgb(168, 168, 170);
            color:rgb(77, 47, 103);
        }
    </style>
</head>
<body>
    <form action='index.php' method='get'>
            <input type='number' name='num1' value='<?= $_GET['num1'] ?? '' ?>'>
        <select name='oper'>
            <option value='+'>+</option>
            <option value='-'>-</option>
            <option value='*'>*</option>
            <option value='/'>/</option>
        </select>
            <input type='number' name='num2' value='<?= $_GET['num2'] ?? '' ?>'>
        <button>=</button>
        <input type='number' name='result' value='<?= $result ?>' readonly>
    </form>
</body>
</html>
