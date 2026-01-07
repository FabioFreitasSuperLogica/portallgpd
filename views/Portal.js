class Portal {
    static init() {
        document.getElementById('opcoesLgpdRequisicao').addEventListener('change', () => {
            alert('requisicao');
        });

        document.getElementById('opcoesLgpdConsulta').addEventListener('change', () => {
            alert('consulta');
        });

        document.getElementById('opcoesLgpdViolacao').addEventListener('change', () => {
            alert('violacao');
        });

        document.getElementById('opcoesLgpdDuvidas').addEventListener('change', () => {
            alert('duvidas');
        });
    }
}

Portal.init();