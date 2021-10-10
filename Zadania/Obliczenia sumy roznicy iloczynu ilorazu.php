<!DOCTYPE html>
<html>
<head>
    <title>Liczba a podzielna przez 2 i przez 3</title>
    <meta charset=utf-8>
    <meta name="author" content="Michał Jan Lewandowski">
    </head>
<body>

    <?php  
    
    echo "Napisz program, który wykona obliczenia sumy, różnicy, iloczynu, ilorazu, reszty z dzielenia oraz potęgowania liczb c=5 i d=3. Wszystkie wyniki mają być wyświetlone naraz.",'<br>';
    $c=5;
    $d=3;
    echo "Wynik sumy wynosi: ", ($c+$d), '<br>';
    echo "Wynik różnicy wynosi: ", ($c-$d), '<br>';
    echo "Wynik iloczynu wynosi: ", ($c*$d), '<br>';
    echo "Wynik ilorazu wynosi: ", ($c/$d), '<br>';
    echo "Wynik reszty z dzielenia wynosi: ", ($c%$d), '<br>';
    echo "Wynik potęgi wynosi: ", ($c**$d), '<br>';
    
    
    ?>
</body>

</html>