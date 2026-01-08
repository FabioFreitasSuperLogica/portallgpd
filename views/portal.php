<div class="container">
    <div class="row">
        <div class="title-box text-center">
            <h2 class="title">PORTAL LGPD</h2>
        </div>
    </div>
    <p>
        Respeitamos a sua privacidade e disponibilizamos recursos em nosso Portal LGPD garantindo o exerc&iacute;cio dos seus direitos na Lei Geral de Prote&ccedil;&atilde;o de Dados Pessoais.
    </p>
    <p>
        A privacidade dos seus dados &eacute; nossa responsabilidade, caso queira solicitar informa&ccedil;&otilde;es
        e exercer de direitos previstos na Lei Geral de Prote&ccedil;&atilde;o de Dados (LGPD),
        selecione as op&ccedil;&otilde;es abaixo e preencha as etapas.
    </p>
    <div class="col-12 form-part white-bg">
        <div class="row">
            <form id="formPortalLgpd" name="formPortalLgpd" action="" method="post" enctype="multipart/form-data">
                <table style="border:0px;">
                    <tr>
                        <td>
                            <a href="" data-bs-toggle="modal" data-bs-target="#requisicaoModal">Requisi&ccedil;&atilde;o</a>
                        </td>
                    </tr>
                    <tr id="requisicaoContent">
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <!-- <input type="radio" class="input-radio" name="opcoesLgpd" id="opcoesLgpdConsulta">
                            <label for="opcoesLgpdConsulta">Consulta</label> -->
                            <a href="" data-bs-toggle="modal" data-bs-target="#consultaModal">Consulta</a>
                        </td>
                    </tr>
                    <tr id="consultaContent">
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <!-- <input type="radio" class="input-radio" name="opcoesLgpd" id="opcoesLgpdViolacao">
                            <label for="opcoesLgpdViolacao">Reportar uma viola&ccedil;&atilde;o</label> -->
                            <a href="" id="opcoesLgpdViolacao">Reportar uma viola&ccedil;&atilde;o</a>
                        </td>
                    </tr>
                    <tr id="violacaoContent">
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <!-- <input type="radio" class="input-radio" name="opcoesLgpd" id="opcoesLgpdDuvidas">
                            <label for="opcoesLgpdDuvidas">D&uacute;vidas e Contato</label> -->
                            <a href="?pg=contatos">D&uacute;vidas e Contato</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<?php
require_once 'modals/requisicao.php';
require_once 'modals/consulta.php';
?>

<!-- <script src="views/Portal.js"></script>
<script src="js/jquery.min.js"></script> -->