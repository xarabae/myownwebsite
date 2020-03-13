<?php
    require 'inc/db.php';

    if (!isset($_POST["test"])) {$_POST["test"] = "";}

    function buildSocialArea($link, $img){
        echo "<li class='pull-right'>";
        echo "<a href='" . $link . "' target='_blank'>";
        echo "<img class='icon' src='inc/" . $img . ".png'>";
        echo "</a>";
        echo "</li>\n";
    }

    function getDataForSocialArea($name){
        global $db_connect;
        $query_string = "SELECT link, img FROM social WHERE name = " . $name;
        $query_result = mysqli_query($db_connect, $query_string);

        while($row = mysqli_fetch_row($query_result))
        {
            buildSocialArea($row[0],$row[1]);
        }
    }
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>xara titania - home</title>
    <meta http-equiv='content-type' content='text/html' charset='utf-8'>
    <meta name="Description" content=""/>
    <meta name="Author" content=""/>
    <meta name="Keywords" content=""/>
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Damion|Quicksand|Oleo+Script|Pacifico&display=swap" rel="stylesheet"> 
</head>
<body>
    <header class="main-container header-height margin-bottom-20">
        <div class="container header-height">
            <div class="third-container vertical-middle"></div>
            <div class="third-container vertical-middle">
                <a class="position-middle home link-black" href="index.html">Xara Titania</a>
            </div>
            <div class="third-container vertical-middle">
                <ul id="social">
                    <?php 
                        getDataForSocialArea("'Twitch'");
                        getDataForSocialArea("'YouTube'");
                        getDataForSocialArea("'Steam'");
                        getDataForSocialArea("'Spotify'");
                        getDataForSocialArea("'Pinterest'");
                        getDataForSocialArea("'Instagram'");
                        getDataForSocialArea("'Linkedin'");
                    ?>
                </ul>
            </div>
        </div>
    </header>
    <nav class="main-menu margin-bottom-50 position-center">
        <div class="container">
            <input type="submit" class="menu-button" name="menu-button" value="HOME">
            <input type="submit" class="menu-button" name="menu-button" value="WORK">
            <input type="submit" class="menu-button" name="menu-button" value="GAMING">
            <input type="submit" class="menu-button" name="menu-button" value="CREATIVE SPACE">
            <input type="submit" class="menu-button" name="menu-button" value="ABOUT">
            <input type="submit" class="menu-button" name="menu-button" value="CONTACT">
        </div>
    </nav>
    <div class="content">
        <div class="content main-container">
            <div class="container">
                <div>
                    <h2>Home</h2>
                </div>
            </div>
        </div>
    </div> <!-- class="content" end -->
    <footer class="main-container">
        <div class="container footer-height">
            <div class="third-container vertical-middle">
                <a class="link-white home-bottom" href="index.html">Xara Titania</a>
            </div>
            <div class="third-container vertical-middle"></div>
            <div class="third-container vertical-middle">
                <div id="contact">
                    <a class="link-white pull-right" href="legal.html">Legal</a>
                    <a class="link-white pull-right" href="contact.html">Contact</a>
                    <a class="link-white pull-right" href="about.html">About</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>