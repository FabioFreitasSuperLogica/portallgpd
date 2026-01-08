class Portal {

    static init() {

        document.getElementById('opcoesLgpdConsulta').addEventListener('click', () => {
            alert('consulta');
        });

        document.getElementById('opcoesLgpdViolacao').addEventListener('click', () => {
            alert('violacao');
        });

        document.getElementById('opcoesLgpdDuvidas').addEventListener('click', () => {
            alert('duvidas');
        });
    }
}

Portal.init();