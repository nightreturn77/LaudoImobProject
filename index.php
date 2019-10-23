<?php


include('header.php');


?>

<!-- inicio do formulário do imóvel -->
<form action="php/cadastrar.php" method="post">
<h1 class="text-center dejavu text-light">Formulário de Laudo Técnico</h1>
    <hr>
    <!-- Inicio do formulário de endereço -->
    <h1 class="text-center dejavu text-light h3 p-3">Endereço</h1>
  <div class="form-row">
      <!-- utilização do JavaScript para pegar o endereço pelo cep --> 
  <div class="form-group col-md-6">
      <label class="dejavu text-light h5">CEP</label>
      <input type="text" onblur="pesquisacep(this.value);" class="form-control" placeholder="21745555" name="cep">
    </div>
    <div class="form-group col-md-6">
      <label class="dejavu text-light h5">Logradouro</label>
      <input type="text" class="form-control" id="rua" placeholder="ex: Rua das Graças, 155" name="logradouro">
    </div>
    <div class="form-group col-md-6">
      <label class="dejavu text-light h5">Complemento</label>
      <input type="text" class="form-control"  placeholder="ex:Lote 2" name="complemento">
    </div>
    <div class="form-group col-md-6">
        <label class="dejavu text-light h5">Bairro</label>
        <input type="text" class="form-control" id="bairro" placeholder="1234 Main St" name="bairro">
    </div>
    <div class="form-group col-md-6">
        <label class="dejavu text-light h5">Ponto de Referência</label>
        <input type="text" class="form-control" placeholder="Próximo ao extra" name="referencia">
    </div>
        <div class="form-group col-md-6">
            <label class="dejavu text-light h5">Código</label>
            <input type="text" class="form-control" name="codigo">
        </div>
        <div class="form-group col-md-6">
            <label class="dejavu text-light h5">Edifício</label>
            <input type="text" class="form-control" id="inputZip" name="edificio">
        </div>
        <div class="form-group col-md-6">
            <label class="dejavu text-light h5">Condomínio</label>
            <input type="text" class="form-control" id="inputZip" name="condominio">
        </div>
        <!-- final do formulário de endereço --> 
    </div>
</div>
<div class="form-group col-md-2">
    <button type="submit" name="cadastrar" class="btn btn-dark">Cadastrar</button>
    </div>
</form>



</div>
</div>












<?php


include('footer.php');

?>