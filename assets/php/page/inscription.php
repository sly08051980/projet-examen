<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../sass/style.css">
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LfLAx8pAAAAAHHRkBRJtfX-AKt_GOLNtoy8hOEY" async defer></script>
    <script src="../../js/inscription.js"defer></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">

    <title>Inscription</title>
</head>
<body>
    <header>
       <?php  include '../header.php' ?>
    </header> 
    <main>
        <div class="connexion-inscription">
            <p>Pas encore de compte, remplissez le formualire pour s inscrire</p>
            <form>
                <fieldset>
                  <legend>Inscription</legend>
                    <div class="flex">
                        <label>Nom : </label>
                        <input type="text" id="nom">
                    </div>
                    <div class="flex">
                        <label>Prénom : </label>
                        <input type="text" id="prenom">
                    </div>
                    <div class="flex">
                        <label>téléphone : </label>
                        <input type="text" id="telephone">
                    </div>          
                  <div class="flex">
                      <label>E-mail : </label>
                      <input type="text" id="email">
                          
                  </div>
                <div class="flex">
                    <label>Adresse : </label>
                    <input type="text" id="adresse">
                </div>
                <div class="flex">
                    <label>Code Postal : </label>
                    <input type="text" id="codepostal">
                </div>
                <div class="flex">
                    <label>Ville : </label>
                    <input type="text" id="ville">
                </div>
                  <div class="flex">
                    <label>Password : </label>
                    <div class="password-container">
                      <input type="password" id="password" class="password-input">
                      <img src="../../images/oeil.png" id = "oeil" class="oeil-icon">
                    </div>
                  </div>
                  <div class="flex">
                    <label>Confirmer Password : </label>
                    <div class="password-container">
                      <input type="password" id="password-confirm" class="password-input">
                      <img src="../../images/oeil.png" id = "oeil-confirm" class="oeil-icon">
                    </div>
                  </div>
                  <div class="flex">
                    <input type="submit" id="submite"></label>    
                  </div>
                </fieldset>
            </form>
            <p>Déjà un compte </p>
            <p>Cliquer <a href="#">ici</a> pour vous connecter</p>
        </div>
        <?php
        
require 'vendor/autoload.php';

// Inclure les dépendances Google Cloud à l'aide de Composer
use Google\Cloud\RecaptchaEnterprise\V1\RecaptchaEnterpriseServiceClient;
use Google\Cloud\RecaptchaEnterprise\V1\Event;
use Google\Cloud\RecaptchaEnterprise\V1\Assessment;
use Google\Cloud\RecaptchaEnterprise\V1\TokenProperties\InvalidReason;

/**
  * Créez une évaluation pour analyser le risque d'une action dans l'interface utilisateur.
  * @param string $recaptchaKey La clé reCAPTCHA associée au site ou à l'application
  * @param string $token Jeton généré auprès du client.
  * @param string $project L'ID de votre projet Google Cloud.
  * @param string $action Nom d'action correspondant au jeton.
  */
function create_assessment(
  string $recaptchaKey,
  string $token,
  string $project,
  string $action
): void {
  // Créez le client reCAPTCHA.
  // À FAIRE : mettre en cache le code de génération du client (recommandé) ou appeler client.close() avant de quitter la méthode.
  $client = new RecaptchaEnterpriseServiceClient();
  $projectName = $client->projectName($project);

  // Définissez les propriétés de l'événement à suivre.
  $event = (new Event())
    ->setSiteKey($recaptchaKey)
    ->setToken($token);

  // Créez la demande d'évaluation.
  $assessment = (new Assessment())
    ->setEvent($event);

  try {
    $response = $client->createAssessment(
      $projectName,
      $assessment
    );

    // Vérifiez si le jeton est valide.
    if ($response->getTokenProperties()->getValid() == false) {
      printf('The CreateAssessment() call failed because the token was invalid for the following reason: ');
      printf(InvalidReason::name($response->getTokenProperties()->getInvalidReason()));
      return;
    }

    // Vérifiez si l'action attendue a été exécutée.
    if ($response->getTokenProperties()->getAction() == $action) {
      // Obtenez le score de risques et le ou les motifs.
      // Pour savoir comment interpréter l'évaluation, consultez les pages suivantes :
      // https://cloud.google.com/recaptcha-enterprise/docs/interpret-assessment
      printf('The score for the protection action is:');
      printf($response->getRiskAnalysis()->getScore());
    } else {
      printf('The action attribute in your reCAPTCHA tag does not match the action you are expecting to score');
    }
  } catch (exception $e) {
    printf('CreateAssessment() call failed with the following error: ');
    printf($e);
  }
}

// À FAIRE : remplacer le jeton et les variables d'action reCAPTCHA avant d'exécuter l'exemple.
create_assessment(
   '6LfLAx8pAAAAAHHRkBRJtfX-AKt_GOLNtoy8hOEY',
   'YOUR_USER_RESPONSE_TOKEN',
   'taxiconventionnes77',
   'YOUR_RECAPTCHA_ACTION'
);
?>
    </main>
    <footer>
       <?php  include '../footer.php' ?>
    </footer>
    
</body>
</html>