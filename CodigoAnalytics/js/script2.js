const botaoForm2 = document.querySelector(".form-button");

botaoForm2.addEventListener('click', function(event) {

  const inputEmailImc = document.querySelector("#inputEmailImc");
  const spanEmailImc = document.querySelector("#msgErroImcEmailImc");
  const msgErroFormEmailImc = "Preencha seu Email";

    if (inputEmailImc.value === null || inputEmailImc.value === '') {
      event.preventDefault();
      inputEmailImc.focus();
      spanEmailImc.textContent = msgErroFormEmailImc;
    } else {
      spanEmailImc.textContent = "";
    }
  })

  const botaoForm3 = document.querySelector("#form-contato2");

  botaoForm3.addEventListener('click', function(event) {

    const inputNomeImc = document.querySelector("#inputNomeImc");
    const inputTelImc = document.querySelector("#inputTelImc");
    const spanNomeImc = document.querySelector("#msgErroImcNomeImc");
    const spanTelImc = document.querySelector("#msgErroImcTelImc");
    const msgErroFormNomeImc = "Preencha seu Nome";
    const msgErroFormTelImc = "Preencha seu Telefone para podermos te contar nossa mágica :)";

      if (inputNomeImc.value === null || inputNomeImc.value === '') {
        event.preventDefault();
        inputNomeImc.focus();
        spanNomeImc.textContent = msgErroFormNomeImc;
      } else if (inputTelImc.value === null || inputTelImc.value === '') {
        event.preventDefault();
        inputTelImc.focus();
        spanTelImc.textContent = msgErroFormTelImc;
      } else {
        spanNomeImc.textContent = "";
        spanTelImc.textContent = "";
        pixelFaceImc();
      }
    })

    function pixelFaceImc() {

      fbq('track', 'Contact');
    }

  function replaceVirgulaOuPontoNaAltura(){
    var inputAlturaImc = document.getElementById("inputAlturaImc");
    var alturaTexto = document.getElementById("inputAlturaImc").value;
    if (alturaTexto.match(/./)) {
      var alturaTextoSemPonto = alturaTexto.replace(".","");
      inputAlturaImc.value = alturaTextoSemPonto;

    } else if (alturaTexto.match(/,/)) {
      var alturaTextoSemVirgula = alturaTexto.replace(",","");
      inputAlturaImc.value = alturaTextoSemVirgula;
    }
  }

  function arredondaPeso(){
    var inputPesoImc = document.getElementById("inputPesoImc");
    var pesoTexto = document.getElementById("inputPesoImc").value;
    if (pesoTexto.match(/./)) {
      var pesoTextoArredondado = Math.round(pesoTexto);
      inputPesoImc.value = pesoTextoArredondado;

    } else if (pesoTexto.match(/,/)) {
      var pesoTextoArredondado = Math.round(pesoTexto);
      inputPesoImc.value = pesoTextoArredondado;
    }
  }
