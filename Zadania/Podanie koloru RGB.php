<!DOCTYPE html>
<html>
<head>
    <title>Numery tygodnia</title>
    <meta charset=utf-8>
    <meta name="author" content="Michał Jan Lewandowski">
    </head>
<body>
Wpisz kolor aby wyświetlić jego odpowiednik w kodzie RGB.
    
    <form action="Podanie koloru RGB.php" method="GET">
  Wpisz kolor: <input type=text name="$kolor"/><br/>
        <input type="submit" value="Sprawdź" /></form>
    
    
    
    <?php   
    
        switch ($_GET['$kolor'])
        {
            case 'red':
               echo "Kolor ", ($_GET['$kolor']) , " to: 255, 0, 0";
                break;
            case 'Red':
               echo "Kolor ", ($_GET['$kolor']) , " to: 255, 0, 0";
                break;
                
                case 'blue':
               echo "Kolor ", ($_GET['$kolor']) , " to: 0, 0, 255";
                break;
                case 'Blue':
               echo "Kolor ", ($_GET['$kolor']) , " to: 0, 0, 255";
                break;
                
                case 'green':
               echo "Kolor ", ($_GET['$kolor']) , " to: 0,128,0";
                break;
                case 'Green':
               echo "Kolor ", ($_GET['$kolor']) , " to: 0,128,0";
                break;
                
                case 'yellow':
               echo "Kolor ", ($_GET['$kolor']) , " to: 255,255,0";
                break;
                case 'Yellow':
               echo "Kolor ", ($_GET['$kolor']) , " to: 255,255,0";
                break;
                
                case 'pink':
               echo "Kolor ", ($_GET['$kolor']) , " to: 255,192,203";
                break;
                case 'Pink':
               echo "Kolor ", ($_GET['$kolor']) , " to: 255,192,203";
                break;
                
                case 'violet':
               echo "Kolor ", ($_GET['$kolor']) , " to: 127,0,255";
                break;
                case 'Violet':
               echo "Kolor ", ($_GET['$kolor']) , " to: 127,0,255";
                break;
                
                case 'orange':
               echo "Kolor ", ($_GET['$kolor']) , " to: 255,165,0";
                break;
                case 'Orange':
               echo "Kolor ", ($_GET['$kolor']) , " to: 255,165,0";
                break;
                
                case 'black':
               echo "Kolor ", ($_GET['$kolor']) , " to: 0,0,0";
                break;
                case 'Black':
               echo "Kolor ", ($_GET['$kolor']) , " to: 0,0,0";
                break;
                
                case 'white':
               echo "Kolor ", ($_GET['$kolor']) , " to: 255,255,255";
                break;
                case 'White':
               echo "Kolor ", ($_GET['$kolor']) , " to: 255,255,255";
                break;
                
                case 'brown':
               echo "Kolor ", ($_GET['$kolor']) , " to: 165,42,42";
                break;
                case 'Brown':
               echo "Kolor ", ($_GET['$kolor']) , " to: 165,42,42";
                break;
                
                
                default:
                echo "Podany kolor: " , ($_GET['$kolor']) , " niestety nie jest podany w naszej bazie kolorów. Przykro nam z tego powodu ale w rekompensaty proszę oto link do ślicznych kotków: https://www.youtube.com/watch?v=dQw4w9WgXcQ";
                break;
        }
    ?>
</body>

</html>