function qualitapw() {
  var parametri = {
    contacaratteri: false,
    lettere: false,
    numeri: false,
    speciali: false,
  }
  var barracolorata = document.getElementById("barra-colorata");
  var sottopassword = document.getElementById("sottopassword");
  var specifiche = document.getElementById("specifiche-password");
  var password = document.getElementById("password").value;

  parametri.lettere = (/[A-Za-z]+/.test(password)) ? true : false;
  parametri.numeri = (/[0-9]+/.test(password)) ? true : false;
  parametri.speciali = (/[!\"$%&/()=?@~`\\.\';:+=^*_-]+/.test(password)) ? true : false;
  parametri.contacaratteri = (password.length > 7) ? true : false;

  var lunghezzabarra = Object.values(parametri).filter(value => value);

  barracolorata.innerHTML = "";
  for (let i in lunghezzabarra) {
    let span = document.createElement("span");
    span.classList.add("barra");
    barracolorata.appendChild(span);
  }

  let spanRef = document.getElementsByClassName("barra");
  for (let i = 0; i < spanRef.length + 1; i++) {
    switch (spanRef.length) {

      case 0:
        sottopassword.textContent = "Inserisci una password";

      case 1:
        spanRef[i].style.background = "#ff3e36";
        specifiche.style.display = "block";
        sottopassword.textContent = "La password inserita è molto debole";
        break;

      case 2:
        spanRef[i].style.background = "#ff691f";
        specifiche.style.display = "block";

        sottopassword.textContent = "La password inserita è debole";
        break;

      case 3:
        spanRef[i].style.background = "#ffda36";
        specifiche.style.display = "block";

        sottopassword.textContent = "La password inserita è buona";
        break;

      case 4:
        spanRef[i].style.background = "#0be881";
        specifiche.style.display = "none";
        sottopassword.textContent = "La password inserita è ottima ";
        break;

    }
  }
}


function mostrapw() {
  let password = document.getElementById("password");
  let bottonempw = document.getElementById("mostrapassword");

  if (password.getAttribute("type") == "password") {
    password.setAttribute("type", "text");
    bottonempw.style.color = "#1f78f4";
  } else {
    password.setAttribute("type", "password");
    bottonempw.style.color = "#808080";
  }
}

function mostrapwripetuta() {
  let password = document.getElementById("passwordRipetuta");
  let bottonempw = document.getElementById("mostrapasswordRipetuta");

  if (password.getAttribute("type") == "password") {
    password.setAttribute("type", "text");
    bottonempw.style.color = "#1f78f4";
  } else {
    password.setAttribute("type", "password");
    bottonempw.style.color = "#808080";
  }
}

function validapassword() {
  var passwordInserita = document.getElementById("password").value;
  var passwordRipetuta = document.getElementById("passwordRipetuta").value;
  let buttondis = document.getElementById("bottonereg");

  if (passwordInserita == passwordRipetuta) {
    buttondis.disabled = false;
  } else {
    buttondis.disabled = true;

  }
}

//funzione per cambiare colore allo sfondo

window.addEventListener('scroll', () => {

  var oggettoUno = document.getElementById('uno');
  var oggettoDue = document.getElementById('due');
  var oggettoTre = document.getElementById('tre');

  var oggettoUnoPosizione = oggettoUno.getBoundingClientRect().top;
  var oggettoDuePosizione = oggettoDue.getBoundingClientRect().top;
  var oggettoTrePosizione = oggettoTre.getBoundingClientRect().top;

  var PosizioneSchermo = window.innerHeight;


  if (PosizioneSchermo <= oggettoUnoPosizione + 100) {
    document.getElementById("sezionelinguaggi").style.backgroundColor = "#FFFFFF";
  }
  if (PosizioneSchermo > oggettoUnoPosizione + 100) {
    document.getElementById("sezionelinguaggi").style.backgroundColor = "#f2c6b4";
  }
  if (PosizioneSchermo > oggettoDuePosizione + 100) {
    document.getElementById("sezionelinguaggi").style.backgroundColor = "#f3e8cb";
  }
  if (PosizioneSchermo > oggettoTrePosizione + 100) {
    document.getElementById("sezionelinguaggi").style.backgroundColor = "#a2d5f2";

  }


});


$(document).ready(function () {

  $("#toggle-orario").click(function () {
    $("#orario").fadeToggle(100);
  });
  $("#toggle-sede").click(function () {
    $("#sede").fadeToggle(100);
  });
  $("#toggle-contatti").click(function () {
    $("#contatti-docente").fadeToggle(100);
  });

  $('.contatore').each(function () {

    $(this).prop('contatore', 0).animate({
      contatore: $(this).text()
    }, {
      duration: 4000,
      easing: 'swing',
      step: function (now) {
        $(this).text(Math.ceil(now) + '+');
      }
    })
  });




});






//Sezione Michele
function setUser() {
  var username = document.getElementById("user");
  sessionStorage.setItem("login_user", username.value);
  return true;
}






