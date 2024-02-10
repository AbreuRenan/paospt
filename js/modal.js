window.addEventListener('DOMContentLoaded', ()=> {
    const regex = /^\/sobre-nos(?:\/)?$/;
    if(regex.test(window.location.pathname)) {
        const funcionarios = document.querySelectorAll('.funcionarios');
        const btnFecharModal = document.getElementById('btnFecharModal')
        funcionarios.forEach( funcionario => {
            funcionario.children[0].addEventListener('click', toggleModal);
        })
        btnFecharModal.onclick = toggleModal;

    }

})

 
function toggleModal(e) {
    const modalJanela = document.querySelector('.modal_container');
    if (modalJanela.classList.contains('is_open')) {
        modalJanela.classList.remove('is_open')
    } else {
        modalJanela.classList.add('is_open')
        const modal_content = document.querySelector('.modal_content');
        const [imgContainer, nome, cargo, sobre, linkedin] = e.target.parentNode.parentNode.children
        const [ modal_imgContainer, modal_nome, modal_cargo, modal_sobre] = modal_content.children;

        const modal_foto    = modal_imgContainer.children[0]
        const img           = imgContainer.children[0]

 
        modal_foto.src = img.src
        modal_nome.innerText = nome.innerText
        modal_cargo.innerText = cargo.innerText
        modal_sobre.innerText = sobre.value

    }

}
