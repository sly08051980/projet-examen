console.log("Script Charger");


const carousel = document.getElementById('carousel');
const prevButton = document.getElementById('prev');
const nextButton = document.getElementById('next');
// pour generer le slider 
const images = [
  "./assets/images/Chien chez le vétérinaire.png",
  "./assets/images/dog at the groomer.png",
  "./assets/images/Chien chez le vétérinaire1 .png",
  "./assets/images/dog at the groomer1.png",
  "./assets/images/Chien chez le vétérinaire2 .png",
  "./assets/images/dog at the vet.png.png"
];
let count = 0;
let nbInterval;

// pour générer le changement de mot et aussi l ecriture
const choice = ["Vétérinaire", "Toiletteur"];
let counter = 0;
let choiceProName = document.getElementById('choix');


// script pour changer le mot + appel de la fonction type écriture
function choisePro() {
    choiceProName = document.getElementById('choix');
    if (counter === 0) {
        choiceProName.innerHTML = choice[1];
        
        counter = 1;
    } else if (counter === 1) {
        choiceProName.innerHTML = choice[0];
        
        counter = 0;
    }
    type();
}

setInterval(choisePro, 2000);

// fin du script de changement 


//fonction pour faire une ecriture comme à la machine à écrire
function type() {
    const text = choiceProName.innerHTML;
    let index = 0;
    choiceProName.textContent = ''; 
    //fonction pour faire lettre par lettre
    function addChar() {
        if (index < text.length) {
          choiceProName.textContent += text[index];
            index++;
            setTimeout(addChar, 100); 
        }
    }
    addChar();
}

//fin de la fonction
type();


//carroussel 

let currentIndex = 0;

function updateCarousel() {
  carousel.style.transform = `translateX(${-currentIndex * 100}%)`;
}

function nextSlide() {
  currentIndex = (currentIndex + 1) % images.length;
  updateCarousel();
}

function prevSlide() {
  currentIndex = (currentIndex - 1 + images.length) % images.length;
  updateCarousel();
}
function autoSlide() {
    nextSlide();
  }
// Dynamically create img elements for each image
images.forEach((imageSrc) => {
  const imgElement = document.createElement('img');
  imgElement.src = imageSrc;
  imgElement.alt = 'Image';
  imgElement.classList.add('carousel-item');
  carousel.appendChild(imgElement);
});

nextButton.addEventListener('click', nextSlide);
prevButton.addEventListener('click', prevSlide);

const intervalId = setInterval(autoSlide, 2000);

// Arrête le changement automatique d'image lorsque la souris est sur le carrousel
carousel.addEventListener('mouseenter', () => clearInterval(intervalId));

// Reprise du changement automatique lorsque la souris quitte le carrousel
carousel.addEventListener('mouseleave', () => {
  intervalId = setInterval(autoSlide, 2000);
});