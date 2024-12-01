//Darkmode
let darkmode = localStorage.getItem('darkmode');
const themeSwitch = document.querySelectorAll('.data_theme'); // Alterado para selecionar por classe

const enableDarkmode = () => {
    document.body.classList.add('darkmode');
    localStorage.setItem('darkmode', 'active'); 
}

const disableDarkmode = () => {
    document.body.classList.remove('darkmode');
    localStorage.setItem('darkmode', null);
}

if (darkmode === "active") enableDarkmode()

// Iterando sobre todos os botões com a classe "data_theme" para adicionar o evento de clique
themeSwitch.forEach((button) => {
    button.addEventListener("click", () => {
        darkmode = localStorage.getItem('darkmode');
        darkmode !== "active" ? enableDarkmode() : disableDarkmode();
    });
});

//Animação Botão Cabeçalho 
function animar() {
    const btn = document.getElementById('btn_fechar');
    const div = document.getElementById('menu_mobile');

    // Verifica se os elementos existem antes de executar o código
    if (btn && div) {
        btn.classList.toggle('ativar');
        div.classList.toggle('abrir');
    }
}

