//controlli password registrazione

//verifica la qualità della password e mostra a schermo un progress bar in base al numero di requisiti raggiunti
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

  let spanBarra = document.getElementsByClassName("barra");
  for (let i = 0; i < spanBarra.length + 1; i++) {
    switch (spanBarra.length) {

      case 0:
        testopw.textContent = "Inserisci una password";

      case 1:
        spanBarra[i].style.background = "#ff3e36";
        specifiche.style.display = "block";
        testopw.textContent = "La password inserita è molto debole";
        break;

      case 2:
        spanBarra[i].style.background = "#ff691f";
        specifiche.style.display = "block";

        testopw.textContent = "La password inserita è debole";
        break;

      case 3:
        spanBarra[i].style.background = "#ffda36";
        specifiche.style.display = "block";

        testopw.textContent = "La password inserita è buona";
        break;

      case 4:
        spanBarra[i].style.background = "#0be881";
        specifiche.style.display = "none";
        testopw.textContent = "La password inserita è ottima ";
        break;

    }
  }
}

//mostra/nascondi password con js
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


//mostra/nascondi password ripetuta con jquery

$(document).ready(function () {
  $('#mostrapasswordRipetuta').click(function () {
    $('#passwordRipetuta').attr('type', $('#passwordRipetuta').is(':password') ? 'text' : 'password');

    if ($('#passwordRipetuta').attr('type') === 'password') {} else {
      $('#eye').removeClass('fa-eye-slash').addClass('fa-eye');
    }
  });

  //verifica se le pw corrispondono
  $("#passwordRipetuta").keyup(function () {
    if ($("#password").val() != $("#passwordRipetuta").val()) {
      $("#messaggiovalidazione").html("Le password non corrispondono").css("color", "red");
      $("#bottonereg").prop("disabled", true);

    } else {
      $("#messaggiovalidazione").html("Le password corrispondono").css("color", "green");
      $("#bottonereg").prop("disabled", false);

    }
  })
});


//funzione per cambiare colore allo sfondo nella home basandosi sul viewport

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

//elementi dinamici homepage
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




//settaggio sessionstorage
function setUser() {
  var username = document.getElementById("user");
  sessionStorage.setItem("login_user", username.value);
  return true;
}

function inviaCommento() {
  //prendo elementi
  var lezione = document.getElementById("lezione").innerHTML;
  var testo = document.getElementById("testo2").value;
  var user = sessionStorage.getItem("login_user");
  var testo_finale = user + ":" + testo;

  //creo elementi
  var li = document.createElement("li");
  li.appendChild(document.createTextNode(testo_finale));
  var lista_commenti = document.getElementById("lista_commenti");
  lista_commenti.appendChild(li);
  //aggiorno localStorage
  var existingEntries = JSON.parse(localStorage.getItem(lezione));
  if (existingEntries == null) existingEntries = [];
  var entry = testo_finale;
  existingEntries.push(entry);
  localStorage.setItem(lezione, JSON.stringify(existingEntries));
  location.reload();


}

function eliminaCommento() {
  var div = document.getElementById("elimina");
  var user = sessionStorage.getItem("login_user");
  //prendo elementi
  var existingEntries = JSON.parse(localStorage.getItem(lezione));
  var count = 0;
  for (let value of existingEntries) {
    var str = value.split(":");
    if (str[0] == user) {
      count += 1;
      var inp = document.createElement("input");
      var lab = document.createElement("label");
      var bro = document.createElement("br");
      lab.innerHTML = value;
      inp.setAttribute("type", "checkbox");
      inp.setAttribute("value", value);
      inp.setAttribute("class", "checkbox");
      div.appendChild(inp);
      div.appendChild(lab);
      div.appendChild(bro);
    }
  }
  if (count == 0) {
    alert("Non ci sono tuoi commenti");
    return;
  }
  var butt = document.createElement("button");
  butt.setAttribute("onClick", "eliminaCommento_parte2()");
  butt.innerHTML = "Elimina";
  div.appendChild(butt);
}

function eliminaCommento_parte2() {
  var checkboxes = document.getElementsByClassName("checkbox");
  var existingEntries = JSON.parse(localStorage.getItem(lezione));
  for (let i of checkboxes) {
    for (let value of existingEntries) {
      if (value == i.value && i.checked == true) {
        let index = existingEntries.indexOf(value);
        existingEntries.splice(index, 1);
      }
    }
  }
  localStorage.setItem(lezione, JSON.stringify(existingEntries));
  location.reload();
}