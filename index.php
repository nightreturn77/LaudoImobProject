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
                    <input class="form-check-input" name="esp1" type="checkbox" value="x" id="esp1">
                    <label id="especificacao1" name="esp1" class="dejavu text-light h5" for="esp1">
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
            <!-- final das especificações do imóvel -->

            <!-- Inicio das informações gerais -->
            <h1 class="text-center dejavu text-light h3 p-3 col-md-12">Informações Gerais</h1>
            <div class="form-group col-md-2">
                <label class="dejavu text-light h5">Ocupação</label>
                <select id="ocupacao" name="ocupacao" class="text-uppercase dejavu form-control">
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                </select>
            </div>

            <div class="col-md-4 mb-3">
                <label class="dejavu text-light h5">Valor do Condomínio</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">R$</span>
                    </div>
                    <input name="valorCondominio" type="text" class="form-control" id="validationDefaultUsername" placeholder="Digite o valor" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label class="dejavu text-light h5">Idade da Construção</label>
                <input type="date" class="form-control" id="idade" name="idadeConstrucao">
            </div>
            <div class="form-group col-md-2">
                <label class="dejavu text-light h5">Habite-se</label>
                <select id="habitese" name="habitese" class="text-uppercase dejavu form-control">
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label class="dejavu text-light h5">Construtora</label>
                <input type="text" class="form-control" id="construtora" name="construtora" placeholder="Nome da construtora">
            </div>
            <div class="col-md-4 mb-3">
                <label class="dejavu text-light h5">Valor do IPTU</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">R$</span>
                    </div>
                    <input type="text" class="form-control" name="valorIPTU" placeholder="Digite o valor" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label class="dejavu text-light h5">Inscrição do IPTU</label>
                <input type="number" class="form-control" id="inscIPTU" name="inscIPTU">
            </div>
            <div class="form-group col-md-6">
                <label class="dejavu text-light h5">Descrição geral dos comodos</label>
                <textarea name="descricaoGeralComodos" class="form-control" rows="3" placeholder="Digite a descrição..."></textarea>
            </div>
            <div class="form-group col-md-6">
                <label class="dejavu text-light h5">Beneficios do condominio</label>
                <textarea name="beneficioCondominio" class="form-control" rows="3" placeholder="Digite os beneficios..."></textarea>
            </div>
            <div class="form-group col-md-4">
                <label class="dejavu text-light h5">Tipo de Fachada</label>
                <input type="text" class="form-control" id="tipoFachada" name="tipoFachada" placeholder="Digite o tipo de fachada">
            </div>
            <div class="form-group col-md-4">
                <label class="dejavu text-light h5">Tamanho do terreno</label>
                <input type="text" class="form-control" id="tamanhoTerreno" name="tamanhoTerreno" placeholder="Digite o tamanho">
            </div>
            <div class="form-group col-md-4">
                <label class="dejavu text-light h5">Casa no centro do terreno?</label>
                <select id="centroTerreno" name="centroTerreno" class="text-uppercase dejavu form-control">
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label class="dejavu text-light h5">Número de Vagas Descobertas</label>
                <input type="number" class="form-control" id="numeroVagasDescobertas" name="numeroVagasDescobertas" placeholder="Digite a quantidade">
            </div>
            <div class="form-group col-md-3">
                <label class="dejavu text-light h5">Número de Vagas Cobertas</label>
                <input type="number" class="form-control" id="numeroVagasCobertas" name="numeroVagasCobertas" placeholder="Digite a quantidade">
            </div>
            <div class="form-group col-md-6">
                <label class="dejavu text-light h5">Itens de lazer</label>
                <textarea name="itensLazer" class="form-control" rows="3" placeholder="Digite a descrição..."></textarea>
            </div>
            <!-- final das informações gerais-->

            <!-- Inicio da documentação -->

            <h1 class="text-center dejavu text-light h3 p-3 col-md-12">Documentação</h1>
            <div class="form-group col-md-4">
                <label class="dejavu text-light h5">Título</label>
                <select name="titulo" class="custom-select text-uppercase" id="titulo">
                    <option value="Compra e venda">Compra e Venda</option>
                    <option value="Promessa de compra e venda">Promessa de compra e venda</option>
                    <option value="Sessão de direitos aquisitivos">Sessão de direitos aquisitivos</option>
                    <option value="Promessa de sessão de direitos aquisitivos">Promessa de sessão de direitos aquisitivos</option>
                    <option value="Compra, venda e sessão">Compra, venda e sessão</option>
                    <option value="Dação em pagamento">Dação em pagamento</option>
                    <option value="Doação">Doação</option>
                    <option value="Instrumento particular de compra e venda">Instrumento particular de compra e venda</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label class="dejavu text-light h5">RGI</label>
                <input type="text" class="form-control" id="rgi" name="rgi" placeholder="">
            </div>
            <div class="form-group col-md-3">
                <label class="dejavu text-light h5">Planta</label>
                <input type="text" class="form-control" id="planta" name="planta" placeholder="">
            </div>
            <div class="form-group col-md-3">
                <label class="dejavu text-light h5">CEDAE</label>
                <input type="text" class="form-control" id="cedae" name="cedae" placeholder="">
            </div>
            <div class="form-group col-md-3">
                <label class="dejavu text-light h5">TX INCENDIO</label>
                <input type="text" class="form-control" id="incendio" name="incendio" placeholder="">
            </div>
            <!-- final da documentacao-->
            

            <!-- Inicio da documentação -->
            <h1 class="text-center dejavu text-light h3 p-3 col-md-12">Dados do proprietário</h1>
            <div class="form-group col-md-3">
                <label class="dejavu text-light h5">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do proprietário">
            </div>
            <div class="form-group col-md-3">
                <label class="dejavu text-light h5">Endereço residencial</label>
                <input type="text" class="form-control" id="residencial" name="residencial" placeholder="Digite o endereço residencial do proprietário">
            </div>
            <div class="form-group col-md-3">
                <label class="dejavu text-light h5">Endereço comercial</label>
                <input type="text" class="form-control" id="comercial" name="comercial" placeholder="Digite o endereço comercial do proprietário">
            </div>
            <div class="form-group col-md-3">
                <label class="dejavu text-light h5">Telefone</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="">
            </div>


        </div>
        <div class="form-group col-md-2 p-2">
            <button type="submit" name="cadastrar" class="btn btn-dark">Cadastrar</button>
        </div>
</form>
















<?php


include('footer.php');

?>