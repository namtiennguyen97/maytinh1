<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        .cal{
            width: 200px;
            height: 300px;
            margin: auto;
           border: 2px #000000 solid;
        }
        .nutton{
            width: 100%;
            position: relative;
        }
    </style>
</head>
<body>
<form method="post">
    First Number: <input type="text" name="first">
    <select name="typeMath">
        <option name="cong">cong</option>
        <option name="tru">tru</option>
        <option name="nhan">nhan</option>
        <option name="chia">chia</option>
    </select>
    SecondNumber: <input type="text" name="second">
    <input type="submit" name="submit">
</form>
</body>
<?php
if ($_SERVER['REQUEST_METHOD']== 'POST'){
    $firstNum = $_POST['first'];
    $secondNum = $_POST['second'];
    $typeMath = $_POST['typeMath'];
}
if ($typeMath == 'cong'){

    echo $firstNum+ $secondNum;
};
if ($typeMath == 'tru'){
    echo $firstNum- $secondNum;
};
if ($typeMath == 'nhan'){
    echo $firstNum* $secondNum;
};
if ($typeMath == 'chia'){
    echo $firstNum/ $secondNum;
};
?>
</html>
