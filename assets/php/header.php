<!-- header.php -->

<?php

$liensHeader = [
    ['text' => 'Connexion', 'href' => '#'],
    ['text' => 'Inscription', 'href' => '#'],
    ['text' => 'Contact', 'href' => '#'],
    
   
];

$adresseLienRgpd = "";
adressLien();

function adressLien()
{
    global $adresseLienRgpd;
    $cheminActuel = $_SERVER['REQUEST_URI'];
    if ($cheminActuel === "/index.html") {
        $adresseLienRgpd = '../assets/php/page/mentions-legales.php';
    } else {
        $adresseLienRgpd = './mentions-legales.htmlphp';
    }
}
?>
<div class="wave">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#fff" fill-opacity="1" d="M0,64L30,80C60,96,120,128,180,144C240,160,300,160,360,144C420,128,480,96,540,106.7C600,117,660,171,720,165.3C780,160,840,96,900,74.7C960,53,1020,75,1080,74.7C1140,75,1200,53,1260,58.7C1320,64,1380,96,1410,112L1440,128L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
</svg>
<nav aria-label="Menu principal">


    
    <input type="checkbox" name="main-nav" id="main-nav" class="burger-check">
    <img src="http://localhost/projet-examen/assets/images/logo.png" alt="logo Vetotoil">
    <label for="main-nav" class="burger menu"><span></span></label>
    <ul>
        <?php
        foreach ($liensHeader as $lien) {
            echo "<li><a href=\"{$lien['href']}\">-{$lien['text']}-</a></li>\n";
        }
        ?>
    </ul>

</nav>
</div>

<h1>Vetotoil</h1>