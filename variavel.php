<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $varvar = "teste";
        $$varvar = "testando";
        $$$varvar = 50;
        
        echo $varvar;
        echo "<br>";
        echo $$varvar;
        echo "<br>";
        echo $teste;
        echo "<br>";
        echo $testando;
    ?>
</body>
</html>