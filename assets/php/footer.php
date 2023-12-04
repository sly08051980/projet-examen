<?php
$liensFooter = [
    ['text' => 'Connexion', 'href' => 'connexion.php'],
    ['text' => 'Inscription', 'href' => 'inscription.php'],
    ['text' => 'Contact', 'href' => '#'],
    ['text' => 'RGPD', 'href' => 'mentions-legales.php']
];

echo "<ul>";

$chemin= $_SERVER['REQUEST_URI'];
// echo "nom". $chemin;

foreach ($liensFooter as $lienFooter) {
    if($chemin == "/projet-examen/"){
        if ($lienFooter['text'] == 'RGPD') {
            $aFooterHref = "href=assets/page/php/{$lienFooter['href']}";
        } elseif ($lienFooter['text'] == 'Connexion') {
            $aFooterHref = "href=assets/page/php/{$lienFooter['href']}";
        } elseif ($lienFooter['text']=='Inscription') {
            $aFooterHref = "href=assets/page/php/{$lienFooter['href']}";
        
        }else {
           
            $aFooterHref = ""; 
        }
       
    }else {
        if ($lienFooter['text'] == 'RGPD') {
            $aFooterHref = "href={$lienFooter['href']}";
        } elseif ($lienFooter['text'] == 'Connexion') {
            $aFooterHref = "href={$lienFooter['href']}";
        } elseif ($lienFooter['text']=='Inscription'){
            $aFooterHref = "href={$lienFooter['href']}";
        }
        
    }
    echo "<li><a $aFooterHref>{$lienFooter['text']}</a></li>";
}

echo "</ul>";
?>
