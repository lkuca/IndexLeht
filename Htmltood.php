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
            HTML, CSS tööd
        </h2>
        <p>
            <br>
            <center><a href="tabelid/lihtneTabel.html">Tabelid</a></center>
            <br>
            <center><a href="lipud.html">Lipud</a></center>
            <br>
        <center><a href="pildid/piltideleht.html">piltideleht</a></center>
            <br>
        <center> <a href="pildid/piltidelehtRelative.html">piltidelehtRelative</a></center>
            <br>
        <center> <a href="pildid/piltidelehtFlex.html">piltidelehtFlex</a></center>
            <br>
        <center> <a href="maparea/maja.html">Maja</a></center>
            <br>
        <center> <a href="java/spordianket.html">spordiankeet</a></center>
            <br>
        <center> <a href="java/Muusikaküsitlus.html">muusikaanket</a></center>
            <br>
        <center>  <a href="java/java/kalk/kalk.html">saiakalkulaator</a></center>
            <br>
        <center>  <a href="java/joonis.html">joonis gangster</a></center>
            <br>
        <center>  <a href="adaptive_media/tabelid_media.html">adaptive web</a></center>
            <br>
        <center>  <a href="responsive_lippud/responsivelippud.html">responsive web</a></center>
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
