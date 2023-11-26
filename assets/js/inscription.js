console.log('inscription');

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
 
})