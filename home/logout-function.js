const logoutBtn = document.getElementById('logout-btn')
const modalDiv = document.getElementById('logout-modal')
const modalCnlBtn = document.getElementById('logout-cancel')
const confirmLogout = document.getElementById('logout-confirm')
const modalCloseBtn = document.getElementsByClassName('close-modal-btn')[0]

logoutBtn.addEventListener('click', function() {
    modalDiv.style.display = 'block'
})

modalCloseBtn.addEventListener('click', function() {
    modalDiv.style.display = 'none'
})

modalCnlBtn.addEventListener('click', function() {
    modalDiv.style.display = 'none'
})

confirmLogout.addEventListener('click', function() {
    // window.location.href = '' COLOCAR AQUI O CAMINHO PARA PAGINA PRINCIPAL
})

// TESTE
// window.onclick = function(e) {
//     if(e.target == modalDiv) {
//         modalDiv.style.display = 'none'
//     }
// }