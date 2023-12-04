console.log('inscription');
let affichePassword = true;
document.addEventListener('DOMContentLoaded',function(){
    document.getElementById("submite").addEventListener("click", function(event) {
        event.preventDefault();
        if (checkFormFields()) {
            document.querySelector("form").submit();
        } else {
            
        }
    });
    
    function checkFormFields() {
        let formFields = document.querySelectorAll("#nom, #prenom, #telephone, #email, #adresse, #codepostal, #ville, #password, #password-confirm");
        let emptyFields =[];
        for (var i = 0; i < formFields.length; i++) {
            if (formFields[i].value.trim() === "") {
                emptyFields.push(formFields[i].id);
               
            }
        }
        if (emptyFields.length > 0) {
            alert(`Veuillez remplir le(s) champ(s) : ${emptyFields.join(", ")}`);
            return false;
        }
        const password=document.getElementById("password").value;
        const confirmPassword=document.getElementById("password-confirm").value;
        if (password !==confirmPassword) {
            alert("les mots de passe sont différents");
            return false;
            
        }else{
            
            return true; 
           
        }
    
        
    }

    function voirPassword(inputId) {
        const passwordInput = document.getElementById(inputId);
      
        if (affichePassword) {
          passwordInput.setAttribute("type", "text");
          affichePassword = false;
        } else {
          passwordInput.setAttribute("type", "password");
          affichePassword = true;
        }
      }
      
      document.getElementById("oeil").addEventListener("click", function () {
        voirPassword("password");
      });
      
      document.getElementById("oeil-confirm").addEventListener("click", function () {
        voirPassword("password-confirm");
      });
      

      function onClick(e) {
        e.preventDefault();
        grecaptcha.enterprise.ready(async () => {
          const token = await grecaptcha.enterprise.execute('6LfLAx8pAAAAAHHRkBRJtfX-AKt_GOLNtoy8hOEY', {action: 'LOGIN'});
        });
      }
  
 
})