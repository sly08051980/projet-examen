<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="stylesheet" href="../../sass/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <script src="../../js/connexion.js"defer></script>
   
    <title>Contact</title>
</head>
<body>
  <header>
    <?php  include '../header.php' ?>
  </header>  
  <main>
    <div class="connexion-inscription">
      <p>Veuillez vous connecter pour accéder à vos services de rendez-vous</p>
      <form>
          <fieldset>
            <legend>Connexion</legend>
             
            <div class="flex">
                <label>E-mail : </label>
                <input type="text" id="email">
                    
            </div>
            <div class="flex">
              <label>Password : </label>
              <div class="password-container">
                <input type="password" id="password" class="password-input">
                <img src="../../images/oeil.png" id = "oeil" class="oeil-icon">
              </div>
            </div>
            <div class="flex">
              <input type="submit" id="submit"></label>    
            </div>
          </fieldset>
      </form>
      <p>Pas encre de compte? </p>
      <p>Vous pouvez vous enregistrer en cliquant <a href="#">ici</a></p>
  </div>
  </main>
  <footer>
    <?php  include '../footer.php' ?>
  </footer>
</body>
</html>