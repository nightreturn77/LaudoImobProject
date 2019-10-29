<?php

include("connection/connection.php");


if (isset($_POST['cadastrar'])) {
    //inicio das variaveis do endereço do formulário   
    $cep = $_POST['cep'];
    $logradouro = $_POST['logradouro'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $referencia = $_POST['referencia'];
    $codigo = $_POST['codigo'];
    $condominio = $_POST['condominio'];
    $edificio = $_POST['edificio'];
    //fim das vars de endereço

    //variavel que guarda a linha sql que será inserida na tabela ENDERECO
    $endereco = "insert into endereco(cep,logradouro,complemento,bairro,referencia,codigo,condominio,edificio)
values('$cep','$logradouro','$complemento','$bairro','$referencia','$codigo','$condominio','$edificio')";

    //executando no banco de dados a variavel de inserção
   /* if (mysqli_query($conn, $endereco)) {
        echo "Cadastrado com sucesso!";
    } else {
        echo "erro ao cadastrar: Erro no Endereco";
    }*/


    //Abaixo o código será da parte de ESPECIFICAÇÕES

    // Recebendo e tratando values da especificação para enviar para o banco 

    $esp1 = null;
    $esp2 = null;
    $esp3 = null;
    $esp4 = null;
    $esp5 = null;
    $esp6 = null;


    if ($_POST['esp0'] == 1) {
        $especificacao = "CASA";

        //tratando checkboxes correspodentes
        if(isset($_POST['esp1'])){ 
            $esp1 = "Linear";
        }
        if(isset($_POST['esp2'])){
            $esp2 = "Frente";
        }
        if(isset($_POST['esp3'])){
            $esp3 = "Duplex";
        }
        if(isset($_POST['esp4'])){
            $esp4 = "Vila";
        }
        if(isset($_POST['esp5'])){
            $esp5 = "Triplex";
        }
        if(isset($_POST['esp6'])){
            $esp6 = "Cond";
        }
    } else if ($_POST['esp0'] == 2) {
        $especificacao = "APARTAMENTO";

         //tratando checkboxes correspodentes
         if(isset($_POST['esp1'])){ 
            $esp1 = "Padrão";
        }
        if(isset($_POST['esp2'])){
            $esp2 = "Duplex";
        }
        if(isset($_POST['esp3'])){
            $esp3 = "Cobertura";
        }
    } else if ($_POST['esp0'] == 3) {
        $especificacao = "TERRENO";

         //tratando checkboxes correspodentes
         if(isset($_POST['esp1'])){ 
            $esp1 = "Uni - Familiar";
        }
        if(isset($_POST['esp2'])){
            $esp2 = "Bi - Familiar";
        }
        if(isset($_POST['esp3'])){
            $esp3 = "Multi - Familiar";
        }
    } else if($_POST['esp0'] == 4) {
        $especificacao = "COMERCIAL";

         //tratando checkboxes correspodentes
         if(isset($_POST['esp1'])){ 
            $esp1 = "Frente";
        }
        if(isset($_POST['esp2'])){
            $esp2 = "Jirau";
        }
        if(isset($_POST['esp3'])){
            $esp3 = "Galeria";
        }
        if(isset($_POST['esp4'])){
            $esp4 = "Loja";
        }
        if(isset($_POST['esp5'])){
            $esp5 = "Sala";
        }
        if(isset($_POST['esp6'])){
            $esp6 = "Galpão";
        }
    }else{
        echo "ERRO: Especificação não selecionada.";
    }

    

    //variavel que guarda a linha sql que será inserida na tabela ESPECIFICACOES
    $especificacoes = "insert into especificacoes(especificacao,esp1,esp2,esp3,esp4,esp5,esp6)
values('$especificacao','$esp1','$esp2','$esp3','$esp4','$esp5','$esp6')";





    //executando  no banco de dados a variavel de inserção de ESPECIFICACOES
 /*if (mysqli_query($conn, $especificacoes)) {
        echo "Especificacoes cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar: Erro no Especificacoes";
    }*/


//Pegando os dados de informações gerais

$ocupacao = $_POST['ocupacao'];
$valorCondominio = $_POST['valorCondominio'];
$idadeConstrucao = $_POST['idadeConstrucao'];
$habitese = $_POST['habitese'];
$construtora = $_POST['construtora'];
$valorIPTU = $_POST['valorIPTU'];
$inscIPTU = $_POST['inscIPTU'];
$descricaoGeralComodos = $_POST['descricaoGeralComodos'];
$beneficioCondominio = $_POST['beneficioCondominio'];
$tipoFachada = $_POST['tipoFachada'];
$tamanhoTerreno = $_POST['tamanhoTerreno'];
$centroTerreno = $_POST['centroTerreno'];
$numeroVagasDescobertas = $_POST['numeroVagasDescobertas'];
$numeroVagasCobertas = $_POST['numeroVagasCobertas'];

//variavel que guarda a linha sql que será inserida na tabela informacoesGerais
$informacoesGerais = "insert into informacoesgerais
(ocupacao,valorCondominio,idadeConstrucao,habitese,construtora,valorIPTU,inscIPTU,descricaoGeralComodos,beneficioCondominio,
tipoFachada,tamanhoTerreno,centroTerreno,numeroVagasDescobertas,numeroVagasCobertas) values('$ocupacao','$valorCondominio','$idadeConstrucao',
'$habitese','$construtora','$valorIPTU','$inscIPTU','$descricaoGeralComodos','$beneficioCondominio','$tipoFachada','$tamanhoTerreno',
'$centroTerreno','$numeroVagasDescobertas','$numeroVagasCobertas')";

/*if(mysqli_query($conn, $informacoesGerais)){ 
    echo "Informações gerais cadastrado com sucesso!";
}else{ 
    echo "Error: Erro ao cadastrar Informações gerais";
}*/


//código abaixo da documentação

//pegando dados da documentação

$titulo = $_POST['titulo'];
$rgi = $_POST['rgi'];
$planta = $_POST['planta'];
$cedae = $_POST['cedae'];
$incendio = $_POST['incendio'];



//variavel que guarda a linha sql que será inserida na tabela documentacao

$documentacao = "insert into documentacao(titulo,rgi,planta,cedae,incendio)
values('$titulo','$rgi','$planta','$cedae','$incendio')";

/*if(mysqli_query($conn, $documentacao)){
    echo "documentação cadastrado com sucesso";
}else{
    echo "Erro: erro ao cadastrar documentação";
}*/


//código abaixo do proprietário

//pegando dados do proprietário
$nome = $_POST['nome'];
$residencial = $_POST['residencial'];
$comercial = $_POST['comercial'];
$telefone = $_POST['telefone'];
$telefoneAlternativo = $_POST['telefoneAlternativo'];
$chaves = $_POST['chaves'];
$precoSolicitado = $_POST['precoSolicitado'];
$avaliacao = $_POST['avaliacao'];
$data = $_POST['data'];
$corretor = $_POST['corretor'];


//variavel que guarda liha sql que será inserida na tabela proprietario
$proprietario = "insert into proprietario(nome,residencial,comercial,telefone,telefoneAlternativo,chaves,precoSolicitado,
avaliacao,data,corretor) values('$nome','$residencial','$comercial','$telefone','$telefoneAlternativo',
'$chaves','$precoSolicitado','$avaliacao','$data','$corretor')";

if(mysqli_query($conn, $proprietario)){
    echo "proprietario cadastrado com sucesso";
}else{
    echo "Erro: erro ao cadastrar propritário";
}








    
} else {
    echo 'Connection error!';
}
