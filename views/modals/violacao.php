<div class="modal fade" id="violacaoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reportar uma viola&ccedil;&atilde;o</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="mb-3">
                        <p class="alert alert-warning" role="alert">
                            Os dados a seguir ser&atilde;o coletados com a &uacute;nica finalidade de identificar
                            &nbsp;o titular dos dados pessoais para viabilizar e facilitar
                            &nbsp;o exerc&iacute;cio de seus direitos previstos na Lei n&ordm; 13.709/2018.
                        </p>
                    </div>
                    <div class="mb-3">
                        <p class="alert alert-warning" role="alert">
                            O Raposo Shopping adotar&aacute; todas as provid&ecirc;ncias necess&aacute;rias para apurar este incidente,
                            &nbsp;tomando todas as medidas cab&iacute;veis &agrave; nossa disposi&ccedil;&atilde;o.
                            &nbsp;Para facilitar a investiga&ccedil;&atilde;o, anexe algum arquivo (formato pdf) necess&aacute;rio &agrave; demonstra&ccedil;&atilde;o e comprova&ccedil;&atilde;o do ocorrido.
                            &nbsp;A seguir, informe-nos tudo o que aconteceu, em detalhes.
                        </p>
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
                    <div class="mb-3">
                        <label for="violacao" class="form-label">Reportar uma viola&ccedil;&atilde;o:</label>
                        <textarea class="form-control" id="violacao" name="violacao" rows="3"></textarea>
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