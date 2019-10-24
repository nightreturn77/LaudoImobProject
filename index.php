<?php


include('header.php');


?>

<!-- inicio do formulário do imóvel -->
<form action="php/cadastrar.php" method="post">
    <h1 class="text-center dejavu text-light">Formulário de Laudo Técnico</h1>
    <div>
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
                <input type="text" class="form-control" placeholder="ex:Lote 2" name="complemento">
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

            <!-- Inicio da especificações do imóvel -->
            <h1 class="text-center dejavu text-light h3 p-3 col-md-12">Especificações</h1>
            
            <div class="form-group col-md-6">
                <label class="dejavu text-light h5">Selecione a especificação</label>
                <select onchange="especificacoes()" id="esp" name="esp0" class="text-uppercase dejavu form-control">
                    <option value="0">Selecione</option>
                    <option value="1">Casa</option>
                    <option value="2">Apartamento</option>
                    <option value="3">Terreno</option>
                    <option value="4">Comercial</option>
                </select>
            </div>
            <div class="col-md-12">
                <div class="form-check">
                    <input class="form-check-input"  name="esp1" type="checkbox" value="x" id="esp1">
                    <label id="especificacao1" name="esp1"  class="dejavu text-light h5" for="esp1">
                        Em aguardo.
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="esp2" type="checkbox" value="" id="esp2">
                    <label id="especificacao2" class="dejavu text-light h5" for="esp2">
                        Em aguardo.
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="esp3" type="checkbox" value="" id="esp3">
                    <label id="especificacao3" class="dejavu text-light h5" for="esp3">
                        Em aguardo.
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="esp4" type="checkbox" value="" id="esp4">
                    <label id="especificacao4" class="dejavu text-light h5" for="esp4">
                        Em aguardo.
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="esp5" type="checkbox" value="" id="esp5">
                    <label id="especificacao5" class="dejavu text-light h5" for="esp5">
                        Em aguardo.
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="esp6" type="checkbox" value="" id="esp6">
                    <label id="especificacao6" class="dejavu text-light h5" for="esp6">
                        Em aguardo.
                    </label>
                </div>
            </div>
            <h1 class="text-center dejavu text-light h3 p-3 col-md-12">Informações Gerais</h1>
        </div>
        <div class="form-group col-md-2 p-2">
            <button type="submit" name="cadastrar" class="btn btn-dark">Cadastrar</button>
        </div>
</form>
















<?php


include('footer.php');

?>