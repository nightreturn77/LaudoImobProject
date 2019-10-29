<?php

include("connection/connection.php");

$criacao =  date('h:i:s, d/m/y');

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
    $endereco = "insert into endereco(cep,logradouro,complemento,bairro,referencia,codigo,condominio,edificio,criacao)
values('$cep','$logradouro','$complemento','$bairro','$referencia','$codigo','$condominio','$edificio','$criacao')";



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
    $especificacoes = "insert into especificacoes(especificacao,esp1,esp2,esp3,esp4,esp5,esp6,criacao)
values('$especificacao','$esp1','$esp2','$esp3','$esp4','$esp5','$esp6','$criacao')";




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
tipoFachada,tamanhoTerreno,centroTerreno,numeroVagasDescobertas,numeroVagasCobertas,criacao) values('$ocupacao','$valorCondominio','$idadeConstrucao',
'$habitese','$construtora','$valorIPTU','$inscIPTU','$descricaoGeralComodos','$beneficioCondominio','$tipoFachada','$tamanhoTerreno',
'$centroTerreno','$numeroVagasDescobertas','$numeroVagasCobertas','$criacao')";


//código abaixo da documentação

//pegando dados da documentação

$titulo = $_POST['titulo'];
$rgi = $_POST['rgi'];
$planta = $_POST['planta'];
$cedae = $_POST['cedae'];
$incendio = $_POST['incendio'];



//variavel que guarda a linha sql que será inserida na tabela documentacao

$documentacao = "insert into documentacao(titulo,rgi,planta,cedae,incendio,criacao)
values('$titulo','$rgi','$planta','$cedae','$incendio','$criacao')";


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


//variaveis para inserção do relacionamento da tabela imvovel

$idEnd = "select idEnd from endereco where criacao = $criacao ";
$idDoc = "select idDoc from documentacao where criacao = $criacao ";
$idEsp = "select idEsp from especificacoes where criacao = $criacao ";
$idInfo = "select idEsp from informacoesGerais where criacao = $criacao ";
$pegaId = array();
array_push($pegaId, $idEnd);
array_push($pegaId, $idDoc);
array_push($pegaId, $idEsp);
array_push($pegaId, $idInfo);

$queryId = mysqli_query($conn, $idEnd);
$queryId2 = mysqli_query($conn, $idDoc);
$queryId3 = mysqli_query($conn, $idEsp);
$queryId4 = mysqli_query($conn, $idInfo);

$arrayId = mysqli_fetch_array($queryId);
$arrayId2 = mysqli_fetch_array($queryId2);
$arrayId3 = mysqli_fetch_array($queryId3);
$arrayId4 = mysqli_fetch_array($queryId4);

$idEnd = $arrayId['idEnd'];
echo $idEnd;


//variavel do imovel 
$imovel = "insert into imovel(idEnd,idDoc,idEsp,idInfo) values(";

$cadastrao = array();
array_push($cadastrao, $endereco);
array_push($cadastrao, $especificacoes);
array_push($cadastrao, $documentacao);
array_push($cadastrao, $informacoesGerais);

array_push($cadastrao, $proprietario);

for($i = 0;$i<5;$i++){
    if(mysqli_query($conn, $cadastrao[$i])){ 
        echo "Cadastro da posição ".$i;
        var_dump($cadastrao[$i]);
        echo "<br>";
    }else{
        echo "erro no na cadastro da posição".$i;
        var_dump($cadastrao[$i]);
        echo "<br>";
    }
}






    
} else {
    echo 'Connection error!';
}
