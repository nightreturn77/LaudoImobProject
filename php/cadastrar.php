<?php

include("connection/connection.php");


if(isset($_POST['cadastrar'])){ 
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
if(mysqli_query($conn, $endereco)){ 
    echo "Cadastrado com sucesso!";
}else{ 
    echo "erro ao cadastrar: Erro no Endereço";
}






}else{ 
    echo 'Connection error!';

}




?>