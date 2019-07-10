const botaoForm = document.querySelector(".form-button");

botaoForm.addEventListener('click', function(event) {

  const form = document.querySelector(".formContato");
  const novoContato = obtemContatoDoForm(form);
  const erros = validaForm(novoContato);

    validaNomeDoForm();
    validaEmailDoForm();
    validaTelefoneDoForm();

    if (erros.length > 0) {
      event.preventDefault();
    } else {
      pixelFaceForm();
    }
})

  function obtemContatoDoForm(form) {
    const novoContato = {
      nome: form.nome.value,
      email: form.email.value,
      telefone: form.telefone.value
    }
    return novoContato;
  }
  function validaNomeDoForm() {
    const nome = document.querySelector("#nomeFormContato").value;
    const spanNome = document.querySelector("#msgErroFormNome");
    const msgErroFormNome = "Preencha seu nome";

    if (nome === null || nome === '') {
      spanNome.textContent = msgErroFormNome;
    } else {
      spanNome.textContent = "";
    }
  }
  function validaEmailDoForm() {
    const email = document.querySelector("#emailFormContato").value;
    const spanEmail = document.querySelector("#msgErroFormEmail");
    const msgErroFormEmail = "Preencha seu Email";
    if (email === null || email === '') {
      spanEmail.textContent = msgErroFormEmail;
    } else {
      spanEmail.textContent = "";
    }
  }
  function validaTelefoneDoForm() {
    const telefone = document.querySelector("#telefoneFormContato").value;
    const spanTelefone = document.querySelector("#msgErroFormTelefone");
    const msgErroFormTelefone = "Preencha seu Telefone";
    if (telefone === null || telefone === '') {
      spanTelefone.textContent = msgErroFormTelefone;
    } else {
      spanTelefone.textContent = "";
    }
  }

  function validaForm(novoContato) {
    var erros = [];
    if (novoContato.nome === null || novoContato.nome === '') {
      erros.push("Erro no nome");
    }
    if (novoContato.email === null || novoContato.email === '') {
      erros.push("Erro no email");
    }
    if (novoContato.telefone === null || novoContato.telefone === '') {
      erros.push("Erro no telefone");
    }
    return erros;
  }

  function pixelFaceForm() {

    fbq('track', 'Contact');
  }
