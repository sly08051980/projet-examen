console.log("script connexion");

let affichePassword = true;
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById("submit").addEventListener('click', function(event) {
      const nomValue = document.getElementById('nom').value;
      const prenomValue = document.getElementById('prenom').value;
      const emailValue = document.getElementById('email').value.trim(); 
      const passwordValue = document.getElementById('password').value;
  
      if (!nomValue || !prenomValue || !emailValue || !passwordValue) {
        if(!nomValue){
            alert("Veuillez remplir le champs Nom");
            event.preventDefault();
        }else if (!prenomValue){
            alert("Veuillez remplir le champs Prénom");
            event.preventDefault();
        }else if (!emailValue){
            alert("Veuillez remplir le champs Email");
            event.preventDefault();
        }else if(!passwordValue){
            alert("Veuillez remplir le champs Password");
            event.preventDefault();
        }
        
      } else {
        if (verifEmail(emailValue)) {
          
        } else {
          alert("L'adresse email n'est pas valide, merci de saisir une adresse valide");
          event.preventDefault();
        }
      }
    });
  
    function verifEmail(email) {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailRegex.test(email);
    }
    
  document.getElementById("oeil").addEventListener("click", function(){
    console.log("click");
    
    let password = document.getElementById("password");
    if (affichePassword){
      
      password.setAttribute("type",'text');
      affichePassword=false;
    }else{
      password.setAttribute("type","password");
      affichePassword=true;
    } 
  });
  });
  

