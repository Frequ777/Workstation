<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Gra w wisielca!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&display=swap" rel="stylesheet">
    <style>
        @import url("style.css")   
    </style>
    <script>
    
        <?php
        $defaultHaslo = "Ala ma kota";
        
        if(isset($_POST['haslo'])){
            echo 'var haslo = `'.$_POST['haslo'].'`;';
        } else {
            echo 'var haslo = `'.$defaultHaslo.'`;';
        }
        ?>
        
    </script>
</head>

<body id="body">
        <div id="logo"><img class="logo" src="img/logo.png"></div>
    
    <div id="bot">Odgadnij hasło!</div>
    <div id="container">
        <div id="keyword"></div>
        <div id="game">
            <img src="img/s0.png" alt="">
        </div>
        <div id="alp"></div>
        <div style="clear:both;"></div>
    </div>
<br><br>
    <div id="haslotext">
        <form action="index.php" method="post">
        <label for="haslo" style="margin-bottom: 20px;">Wprowadź własne hasło poniżej!</label><br>
        <input type="password" id="has" name="haslo"><br>
        <input type="submit" value="Zmien Hasło!" onclick="bierzhaslo()">
    </form>
    </div>
        <script src="script.js"></script>
    <!--
    <script>
        function bierzhaslo(){
            var haslo = document.getElementById("has").value;
        }
    </script>
    -->
</body></html>