<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="public/css/style.css" rel="stylesheet" />
</head>
<body>
<div class="container" style="margin-top: 50">
    <img class = "img" src="123.png" alt="Calculate your best price with Check24" style="width:400px;height:200px;">
        <form action="" method="post" id="quiz-form">
            <lable class="form-label"  for="value1"></label>
            <b>Value 1 : </b><input class="form-input" type="number" step="any" name="value1" id="value1">
            </br>
            </br>

            <label class="form-label" for="value2"></label>
            <b>Value 2 : </b><input class="form-input" type="number" step="any" name="value2" id="value2">
</br>
</br>
            <b>Operator : </b><label class="operation" for="operation"></label>
            <select name="operation" id="operation" class = "options">
                <option >add</option>
                <option>subtract</option>
                <option>multiply</option>
                <option>divide</option>

            </select>
</br>
</br>
    <button class="btnCheck" id = "submit"></i>Calculate</button>
    <input type="reset" value="Reset" class="btnReset">
    </br>
    </br>

<?php
require realpath("vendor/autoload.php");

    $num1 = $_POST['value1']??null;
    $num2 = $_POST['value2']??null;
    $operator = $_POST['operation']??null;
    $math = new Azubi\Math\Math();
    $result=null;

    if (is_numeric($num1) && is_numeric($num2)) {
    switch ($operator) {
        case "add":
            $result =  $math->add($num1,$num2);
            break;
        case "subtract":
            $result = $math->subtract($num1,$num2);
            break;
        case "multiply":
            $result=  $math->multiply($num1,$num2);
            break;
        case "divide":
            $result = $math->divide($num1,$num2);
            break;
    }
}
?>

    <b>Result : </b><input class = "resultOut" readonly="readonly" name="result" value="<?php echo $result; ?>"> 
</div>

</form>

<script src="js/script.js"></script>
</body>
</html>