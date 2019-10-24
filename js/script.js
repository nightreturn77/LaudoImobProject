function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('rua').value=("");
    document.getElementById('bairro').value=("");
}

function meu_callback(conteudo) {
if (!("erro" in conteudo)) {
    //Atualiza os campos com os valores.
    document.getElementById('rua').value=(conteudo.logradouro);
    document.getElementById('bairro').value=(conteudo.bairro);
} //end if.
else {
    //CEP não Encontrado.
    limpa_formulário_cep();
    alert("CEP não encontrado.");
}
}

function pesquisacep(valor) {

//Nova variável "cep" somente com dígitos.
var cep = valor.replace(/\D/g, '');

//Verifica se campo cep possui valor informado.
if (cep != "") {

    //Expressão regular para validar o CEP.
    var validacep = /^[0-9]{8}$/;

    //Valida o formato do CEP.
    if(validacep.test(cep)) {

        //Preenche os campos com "..." enquanto consulta webservice.
        document.getElementById('rua').value="...";
        document.getElementById('bairro').value="...";


        //Cria um elemento javascript.
        var script = document.createElement('script');

        //Sincroniza com o callback.
        script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

        //Insere script no documento e carrega o conteúdo.
        document.body.appendChild(script);

    } //end if.
    else {
        //cep é inválido.
        limpa_formulário_cep();
        alert("Formato de CEP inválido.");
    }
} //end if.
else {
    //cep sem valor, limpa formulário.
    limpa_formulário_cep();
}
};



/*function especificacoes(){
    var tipo = document.getElementById("esp").value;
    if(tipo == 1){ 
        document.getElementById("especificacao1").innerHTML = "Linear";
        document.getElementById("especificacao1").value = "Linear";
        document.getElementById("especificacao2").innerHTML = "Frente";
        document.getElementById("especificacao2").value = "Frente";
        document.getElementById("especificacao3").innerHTML = "Duplex";
        document.getElementById("especificacao3").value = "Duplex";
        document.getElementById("especificacao4").innerHTML = "Vila";
        document.getElementById("especificacao4").value = "Vila";
        document.getElementById("especificacao5").innerHTML = "Triplex";
        document.getElementById("especificacao5").value = "Triplex";
        document.getElementById("especificacao6").innerHTML = "Cond";
        document.getElementById("especificacao6").value = "Cond";
       
    }else if(tipo == 2){ 
        
        document.getElementById("especificacao1").innerHTML = "Padrão";
        document.getElementById("especificacao1").value = "Padrão";
        document.getElementById("especificacao2").innerHTML = "Duplex";
        document.getElementById("especificacao2").value = "Duplex";
        document.getElementById("especificacao3").innerHTML = "Cobertura";
        document.getElementById("especificacao3").value = "Cobertura";
        document.getElementById("especificacao4").innerHTML = "";
        document.getElementById("especificacao4").value = "";
        document.getElementById("especificacao5").innerHTML = "";
        document.getElementById("especificacao5").value = "";
        document.getElementById("especificacao6").innerHTML = "";
        document.getElementById("especificacao6").value = "";
        document.getElementById("esp4").remove();
        document.getElementById("esp5").remove();
        document.getElementById("esp6").remove();

    }else if(tipo == 3){
        document.getElementById("especificacao1").innerHTML = "Uni - Familiar";
        document.getElementById("especificacao1").value = "Uni - Familiar ";
        document.getElementById("especificacao2").innerHTML = "Bi - Familiar";
        document.getElementById("especificacao2").value = "Bi - Familiar";
        document.getElementById("especificacao3").innerHTML = "Multi - Familiar";
        document.getElementById("especificacao3").value = "Multi - Familiar";
        document.getElementById("especificacao4").innerHTML = "";
        document.getElementById("especificacao4").value = "";
        document.getElementById("especificacao5").innerHTML = "";
        document.getElementById("especificacao5").value = "";
        document.getElementById("especificacao6").innerHTML = "";
        document.getElementById("especificacao6").value = "";
        document.getElementById("esp4").remove();
        document.getElementById("esp5").remove();
        document.getElementById("esp6").remove();


    }
}*/

