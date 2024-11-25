// Localstorage vou manter ele por aqui até então
function savelocalstorage() {
  var nome = document.getElementById("nome").value;
  localStorage.setItem("nome", nome);

  var senha = document.getElementById("senha").value;
  localStorage.setItem("senha", senha);
};

// Botão que ativa e desatica o Night-mode
const chk = document.getElementById('chk')
chk.addEventListener('change', () => {
  document.body.classList.toggle('night-mode')
});

function fazlogout() {
  localStorage.clear()
};