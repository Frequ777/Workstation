<!DOCTYPE html>
<html>
<head>
    <title>Numery tygodnia</title>
    <meta charset=utf-8>
    <meta name="author" content="Michał Jan Lewandowski">
    </head>
<body>
Wpisz numer dnia tygodnia (od 1 do 7) aby wyświetlić nazwe tygodnia.
    <form action="index.php" method="GET">
  Wpisz numer dnia tygodnia: <input type=text name="$numertygodnia"/><br/>
        <input type="submit" value="Sprawdź" /></form>
    
    
    
    <?php   
    
        switch ($_GET['$numertygodnia'])
        {
                case 1:
               echo "Numer ", ($_GET['$numertygodnia']) , " to: Poniedziałek";
                break;
                case 2:
               echo "Numer ", ($_GET['$numertygodnia']) , " to: Wtorek";
                break;
                case 3:
               echo "Numer ", ($_GET['$numertygodnia']) , " to: Środa";
                break; 
                case 4:
               echo "Numer ", ($_GET['$numertygodnia']) , " to: Czwartek";
                break;
                case 5:
               echo "Numer ", ($_GET['$numertygodnia']) , " to: Piątek";
                break;
                case 6:
               echo "Numer ", ($_GET['$numertygodnia']) , " to: Sobota";
                break;
                case 7:
               echo "Numer ", ($_GET['$numertygodnia']), " to: Niedziela";
                break;
            case null:
                echo "Nie został podany żaden numer >:(, Spróbuj jeszcze raz!";
                break;
            /*case (7 < $_GET['$numertygodnia']):
                echo "Numer ", ($_GET['$numertygodnia']), " jest niepoprawny :(. Spróbuj jeszcze raz!";
            case ($_GET['$numertygodnia'] < 1):
                echo "Numer ", ($_GET['$numertygodnia']), " jest niepoprawny :(. Spróbuj jeszcze raz!";
                 break;*/ 
                default:
                echo "Numer ", ($_GET['$numertygodnia']), " jest niepoprawny :(. Spróbuj jeszcze raz!";
                break;
        }
    ?>
</body>

</html>