<?php
if(isset($_GET['code'])) {die(highlight_file(__FILE__,1));}
?>
<!DOCTYPE html><!--html5 deklaratsioon-->
<html lang="et">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Luca WEB apps </title>


</head>
<body>

<header>
    <h1>
        Luca WEB apps

    </h1>

</header>
<!--navigeerimis menuu-->
<nav>

    <ul>
        <li id="peida1">
            <a href="index.php">Homepage</a>
        </li>
        <li id="peida2">
            <a href="Htmltood.php">HTML Works</a>
        </li>
        <li id="peida3">
            <a href="JSPHP.php">JS and PHP Works</a>
        </li>
        <li id="peida4">
            <a <href href="https://lucagluhhov22.thkit.ee/wp/">wordpress</href></a>
        </li>
    </ul>
</nav>
<!--lehe sisu-->
<main>
    <section>
        <ul class="nimekiri">

        </ul>
    </section>
</main>

<main>
    <section>
        <h2>
            JS and PHP Tööd
        </h2>
        <p>
            <br>
        <center> <a href="Content/tarpv22RuhmLeht/tabelikuvamine.php" target="_blank">tarpv22RuhmLeht</a></center>
        <br>
        <center> <a href="Content/untitled/tabelikuvamineKustutamine.php" target="_blank">liblikad</a></center>
        <br>
        <center> <a href="Content/InimesedMaakonnadTARpv22-main/index.php" target="_blank">Inimesed ja maakonnad</a></center>
        <br>
        <center>  <a href="Content/anekdot/anek2.php" target="_blank">Anekdootid</a></center>
        <br>
        <center>  <a href="Content/dancewithstars/haldustleht.php" target="_blank">Tantsud tähtedega</a></center>
        <br>
        <center>  <a href="Content/jõulukaart/kuusk.php" target="_blank">Sõbra päev</a></center>
        <br>
        <center>  <a href="Content/toolivara/table3.php" target="_blank">ToolideProjekt</a></center>
        <br>
        </p>
    </section>
</main>



<!--jalus-->
<footer>
    <strong>&copy; L.Gluhhov</strong>
</footer>
</body>
</html>
