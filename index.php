<!DOCTYPE html>
<html>
<head>
    <style> @import url("style1.css")</style>
    </head>
    <body>
        <div class="nav">
            <ul>
            <li><a href="Zadania/Wisielec_2/index.php">Wisielec</a></li>
            <li><a href="#top">Workstation!</a></li>
            <li><a href="https://www.youtube.com/channel/UCmL1G0_TO_rjAux0xZrD7VA">Youtube</a></li>
            </ul>
        </div>
        <div>
        <h1 style="margin-top: 250px;" id="home" class="title">Witaj na Workstation!</h1>
        <h2 style="margin-bottom: 200px;" class="txt">Strona ta jest poświęcona do przechodzienia do poszczególnych projektów<br>stworzonych w czasie nauki w szkole!</h2>
        </div>
        <div><a class="arrow" href="#choose">
        <h3 style="margin-top: 200px;" class="txt">Kliknij tutaj!<br> Aby przejrzejć projekty!<br>
        <img class="arrow" src="img/arrow.png"></h3>
        </a></div>
                <p id="choose"></p><br>
        <h3 style="margin-top: 20px" id="choose" class="choose">Wybierz program</h3>
        <h2 style="margin-top: 60px" id="choose" class="txt">Tutaj znajdują się programy stworzone podczas zajęć!</h2>

        <div class="container">
                <div class="card_bg">
    <ul class="card jsLocatorCards">
    <?php
    
    /*
            <li class="card">
            <a href="http://localhost/lewandowski/php/Zadania/Podanie%20koloru%20RGB.php">
                <img src="cards/Simple%20RGB%20picker.png" class="cardimg"></a>
        </li>
                        
        <li class="card">
            <a href="http://localhost/lewandowski/php/Zadania/Numery%20tygodnia.php">
                <img src="cards/Caledar%20in%20numbers.png" class="cardimg"></a>
        </li>
        <li class="card">
        <div class="card_bg">
        <img src="cards/soon%20more.png" class="cardimg">
            </div>
        </li>
    */
    
        $pliki = scandir(dirname(__FILE__).'/projects/');
        foreach($pliki as $plik){
            if($plik == "." OR $plik == "..") continue;
            if(file_exists("projects/".$plik."/cardImage.png")) {$isImg = true;} else {$isImg = false;}
                echo '
                <li class="card">
                <div class="card_bg">
                <div class="dataHolder" hidden data-dir="'.$plik.'" data-isimg="'.$isImg.'"></div>
                <a href="/Workstation/projects/'.$plik.'/index.php">
                    <img src="projects/placeholder_cart.png" class="cardimg">
                </a>
            </div>
        </li>
                ';
            //}
        }
    ?>
    </ul>
                
        <script>
            var cards = document.querySelectorAll(`ul.jsLocatorCards li.card`);

            cards.forEach(e => {
                var img     = e.querySelector(`img.cardimg`);
                var dataDiv = e.querySelector(`div.dataHolder`);
                var isImg   = dataDiv.dataset.isimg;
                var name    = dataDiv.dataset.dir;
                var path    = window.location.pathname.replace('apps.php','');
                var url     = window.location.protocol+`//`+window.location.hostname;
                console.log(url);
                
                if(isImg == true){
                    img.src     = url+`/Workstation/projects/`+name+`/cardImage.png`;
                }else{
                    img.src     = `/Workstation/projects/defaultCardImage.png`;
                }
            })
        </script>
                </div>
        </div>
<div><a class="arrow" style="transform: rotate(180deg);"  href="#top">
            
        <h3 style="margin-top: 200px" class="txt">Wróć na górę!<br>
        <img class="arrow" src="img/arrowrev.png"></h3>
        </a></div>
            
    </body>
</html>

