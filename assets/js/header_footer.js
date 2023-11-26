console.log("script charge header");

const liensHeader = [
    { text: 'Connexion', href: '#' },
    { text: 'Inscription', href: '#' },
    { text: 'Contact', href: '#' }
  ];

  const liensFooter=[
    { text: 'Connexion', href: '#' },
    { text: 'Inscription', href: '#' },
    { text: 'Contact', href: '#' },
    { text: 'RGPD' }
  ];

  
  let adresseLienRgpd ="";
adressLien();
  function adressLien(){
    const cheminActuel = window.location.pathname;
    if (cheminActuel==="/index.html"){
        adresseLienRgpd='../assets/page/mentions-legales.html';
    }else{
      adresseLienRgpd='./mentions-legales.html'
    }
  }

//##########################################
//Header
//##########################################

const header =document.querySelector("header");


const nav = document.createElement("nav");
nav.setAttribute("aria-label","Menu principal");
header.appendChild(nav);

const input= document.createElement("input");
input.setAttribute("type","checkbox");
input.setAttribute("name","main-nav");
input.setAttribute("id","main-nav");
input.setAttribute("class","burger-check");
nav.appendChild(input);

const label = document.createElement("label");
label.setAttribute("for","main-nav");
label.setAttribute("class","burger menu");
nav.appendChild(label);

const span=document.createElement("span");
label.appendChild(span);

const ul = document.createElement("ul");
nav.appendChild(ul);

liensHeader.forEach((lien)=>{
    const li = document.createElement("li");
    const a = document.createElement("a");
    a.href = lien.href;
    a.textContent = `-${lien.text}-`;
    li.appendChild(a);
    ul.appendChild(li);
})

const titre = document.createElement("h1");
titre.innerHTML="Vetotoil";
header.appendChild(titre);

//##########################################
//Footer
//##########################################

const footer=document.querySelector("footer")


const ulFooter = document.createElement("ul");
footer.appendChild(ulFooter);

liensFooter.forEach((lienFooter)=>{
    const liFooter=document.createElement("li");
    const aFooter = document.createElement("a");

    aFooter.href=adresseLienRgpd;
    aFooter.textContent=`${lienFooter.text}`;
    liFooter.appendChild(aFooter)
    ulFooter.appendChild(liFooter);

})






