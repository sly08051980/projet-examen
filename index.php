<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/sass/style.css">
    <script type ="module" src="./assets/js/script.js">defer</script>
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6Lc7ih8pAAAAADj2iCEXSeA7f24WJm_9LuaOr2zJ" async defer></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
   

    <title>Vetotoil</title>
</head>
<body>
    <header> 
        <?php include './assets/php/header.php';?>
    </header> 


    <main>
        <div class="top">
                <p>Pour rechercher un <span id="choix">Vétérinaire</span></p>
                <p>Connectez vous pour prendre rendez-vous directement en ligne avec votre professionnel </p>
            
                <div id="carousel-container">
                    <div id="carousel"></div>
                </div>
                    <button id="prev">&#10094;</button>
                    <button id="next">&#10095;</button>
        </div>
        <div class="particulier">
            <h3>Vous êtes un particulier ?</h3>
            <p>Il existe <strong>7 vaccins</strong> qui, s'ils ne sont pas obligatoires, sont très fortement recommandés car ils servent à prévenir des maladies souvent mortelles.</p>
            <p>Le toilettage est une <strong>étape obligatoire</strong> afin de veiller à la bonne hygiène de votre chien. Grâce au savoir-faire des toiletteurs, il sera traité en fonction de ses spécificités, son pelage ou sa race</p>

        </div>
        <div class="professionnel">
                <h3>Vous êtes praticien ?</h3>
                <div class="imgtext">
                    <img src="assets/images/montre.png">
                    <p><strong>Libérez</strong> du temps médical grâce à la prise de rendez-vous en ligne</p>
                </div>
                <div class="imgtext">
                    <img src="assets/images/oeil.png">
                    <p><strong>Développez</strong> l'activité de votre cabinet/salon selon vos besoins grâce à une meilleure visibilité en ligne</p>
                </div>
                <div class="imgtext">
                    <img src="assets/images/telephone.png">
                    <p><strong>Gagnez</strong> en confort de travail au quotidien en réduisant les appels téléphoniques à votre cabinet</p>
                </div>
                <div class="btn">
                    <button>Découvrir VETOTOIL Pour professionnel</button>
                </div>
        </div>
     




    </main>

    <footer>
          <?php include './assets/php/footer.php';?> 
    </footer>

</body>
</html>
