<div class="modal fade" id="requisicaoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Requisi&ccedil;&atilde;o</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="mb-3">,
                        <p class="alert alert-warning" role="alert">
                            Os dados a seguir ser&atilde;o coletados com a &uacute;nica finalidade de identificar
                            &nbsp;o titular dos dados pessoais para viabilizar e facilitar
                            &nbsp;o exerc&iacute;cio de seus direitos previstos na Lei n&ordm; 13.709/2018.
                        </p>
                    </div>

                    <div class="mb-3">
                        <label for="tipoRequisicao" class="form-label">Tipo de Requisi&ccedil;&atilde;o:</label>
                        <select name="tipoRequisicao" id="tipoRequisicao" class="form-control required">
                            <option value="1">Confirmar a exist&ecirc;ncia de tratamento com meus dados pessoais</option>
                            <option value="2">Ter acesso aos meus dados pessoais que est&atilde;o sendo tratados</option>
                            <option value="3">Corrigir algum dado pessoal incompleto, inexato ou desatualizado</option>
                            <option value="4">Anonimizar, bloquear ou eliminar algum dado pessoal</option>
                            <option value="5">Realizar a portabilidade dos meus dados pessoais a outro fornecedor de servi&ccedil;o/produto</option>
                            <option value="6">Eliminar dados pessoais com o meu consentimento</option>
                            <option value="7">Ser informado sobre as entidades p&uacute;blicas e privadas com as quais esta empresa compartilha meus dados pessoais</option>
                            <option value="8">Ser informado sobre a possibilidade de n&atilde;o fornecer consentimento sobre as consequências da negativa</option>
                            <option value="9">Revogar o consentimento que forneci para alguma opera&ccedil;&atilde;o de tratamento com meus dados pessoais</option>
                            <option value="10">Quero parar de receber informa&ccedil;&otilde;es promocionais(campanhas ou promo&ccedil;&otilde;es)</option>
                            <option value="11">Outras informa&ccedil;&otilde;es/solicita&ccedil;&otilde;es</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tipoPessoa" class="form-label">Precisamos saber quem &eacute; voc&ecirc;:</label>
                        <select name="tipoPessoa" id="tipoPessoa" class="form-control required">
                            <option value="1">Pessoa F&iacute;sica</option>
                            <option value="2">Fornecedor ou Parceiro</option>
                            <option value="3">Ex-colaborador</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="setor" class="form-label">Setor:</label>
                        <select name="setor" id="setor" class="form-control required">
                            <option value="">Selecione o setor que deseja encaminhar a solicita&ccedil;&atilde;o</option>
                            <option value="1">Administrativo</option>
                            <option value="2">Financeiro</option>
                            <option value="3">Comercial</option>
                            <option value="4">Gente e Gest&atilde;o</option>
                            <option value="5">Jur&iacute;dico</option>
                            <option value="6">Marketing</option>
                            <option value="7">Tecnologia</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="pedido" class="form-label">Pedido (Informe abaixo a descri&ccedil;&atilde;o da sua requisi&ccedil;&atilde;o)</label>
                        <textarea class="form-control" id="pedido" name="pedido" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" maxlength="11">
                    </div>
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Anexar arquivo, caso necess&aacute;rio.</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </div>
</div>