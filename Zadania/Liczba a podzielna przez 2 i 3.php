<!DOCTYPE html>
<html>
<head>
    <title>Liczba a podzielna przez 2 i 3</title>
    <meta charset=utf-8>
    <meta name="author" content="Michał Jan Lewandowski">
    </head>
<body>

    <?php   
    $a = 9;
    echo 'Napisz program, który sprawdzi czy liczba a (wartość 9) jest podzielna przez 2 i przez 3.','<br>';
    switch ($a%2){
        case 0:
        echo "Liczba ",$a," jest podzielna przez 2";
        break;
        case 1:
        echo "Liczba ",$a," nie jest podzielna przez 2";
        break;    
    }
    echo '<br>';
    switch ($a%3){
        case 0:
        echo "Liczba ",$a," jest podzielna przez 3";
        break;
        case 1:
        echo "Liczba ",$a," nie jest podzielna przez 3";
        break;    
    }?>
</body>

</html>