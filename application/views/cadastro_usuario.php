<?php $this->load->view('shared/cabecalho'); ?>

<form class="form-horizontal" method="post" action="<?= base_url('cadastro/usuario/add') ?>">
    <fieldset>

        <!-- Form Name -->
        <legend>Cadastro</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="NOME">Nome</label>  
            <div class="col-md-3">
                <input id="NOME" name="NOME" type="text" placeholder="Nome Completo" class="form-control input-md">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="CPF_CNPJ">CPF ou CNPJ</label>  
            <div class="col-md-2">
                <input id="CPF_CNPJ" name="CPF_CNPJ" type="text" placeholder="CPF ou CNPJ" class="form-control input-md">
            </div>
        </div>

        <!-- Multiple Radios -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="IND_RESPONSAVEL">Tipo de Perfil</label>
            <div class="col-md-4">
                <div class="radio">
                    <label for="IND_RESPONSAVEL-0">
                        <input type="radio" name="IND_RESPONSAVEL" id="IND_RESPONSAVEL-0" value="1" checked="checked">
                        Pessoa Fisica
                    </label>
                </div>
                <div class="radio">
                    <label for="IND_RESPONSAVEL-1">
                        <input type="radio" name="IND_RESPONSAVEL" id="IND_RESPONSAVEL-1" value="2">
                        Entidade de Adoção
                    </label>
                </div>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="DATA_NASCIMENTO">Data de Nascimento</label>  
            <div class="col-md-2">
                <input id="DATA_NASCIMENTO" name="DATA_NASCIMENTO" type="text" placeholder="Data de Nascimento" class="form-control input-md">
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="UF">UF</label>
            <div class="col-md-2">
                <select id="UF" name="UF" class="form-control">
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Catarina</option> 
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="ENDERECO">Endereço</label>  
            <div class="col-md-4">
                <input id="ENDERECO" name="ENDERECO" type="text" placeholder="Endereço" class="form-control input-md">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="SENHA">Senha</label>  
            <div class="col-md-2">
                <input id="SENHA" name="SENHA" type="password" placeholder="Senha" class="form-control input-md">
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Cadastrar"></label>
            <div class="col-md-4">
                <button class="btn btn-primary" type="submit">Cadastrar</button>
            </div>
        </div>
    </fieldset>
</form>



<?php $this->load->view('shared/rodape'); ?>
