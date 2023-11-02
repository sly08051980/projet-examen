console.log("Script Charger");

import Typewriter from 'node_modules/typewriter-effect/dist/core';
// pour generer le slider 
const imageSlider = ["./assets/images/images2.jfif", "./assets/images/images3.jfif", "./assets/images/images4.jfif"];
let count = 0;
let nbInterval;
// pour générer le changement de mot
const choice = ["Vétérinaire", "Toiletteur"];
let counter = 0;
let element;


//animation




    function changeSlide(sens) {
        count += sens;
        console.log(count);
            if (count < 0) {
                count = imageSlider.length - 1;
            }
            if (count === imageSlider.length) {
                count = 0;
            }

     

        document.getElementById("slide").src = imageSlider[count];
       
    }
    //gerer automatiquement le dérouler du slider 
    setInterval("changeSlide(1)", 4000);
// fin du slider



//script pour changer le mot 
function choisePro() {
    let choiceProName= document.getElementById('choix');


 
    // letterByLetter();
  if (counter === 0) {
    choiceProName.innerHTML = choice[1];

    counter = 1;
  } else if (counter === 1) {
    choiceProName.innerHTML = choice[0];

    counter = 0;
  }
}

setInterval("choisePro()", 2000);
//fin du script de changement 

// function letterByLetter() {

//     let choiceProName= document.getElementById('choix');
//     let choiceName = choiceProName.innerHTML;
//     let choiceNameSplit = choiceName.split("");
//     console.log(choiceNameSplit);
    

//     for (let i = 0; i < choiceNameSplit.length; i++) {
//         element = choiceNameSplit[i];
     
   
//         console.log("drfrguhiilhjghbhighmi ", element);
//     }
  
// }
// setInterval("letterByLetter()", 1000);

let txtAnim = document.getElementById('choix');

new Typewriter('#choix', {
    strings: txtAnim,
    autoStart: true,
  });

