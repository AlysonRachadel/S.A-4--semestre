const registerBtn = document.getElementById('register');
const container = document.getElementById('container');

const loginBtn = document.getElementById('login');


registerBtn.addEventListener('click', () => {
  container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
  container.classList.remove("active");
});

const myModal = document.getElementById('teste')
const myInput = document.getElementById('testee')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})



function adicionarcarrinho() {
console.log('funciona')

  //Obtém a referência para o Combo 

  var combofamilia = document.getElementById('combofamilia')
 
// Obtém a referência para a label de mensagem de erro


  //verifica se a checkbox está marcada 

  if (checkbox.checked) {

    //Obtém o valor da checkbox 

    var valorCombo = checkbox.value;

    //Adiciona o valor ao carrinho 

    adicionaritem(valorCombo);

  } else {
    erromsg.textContent = "Selecione pelo menos um produto para adicionar ao carrinho";

  }

}

function adicionaritem() {
  // Obtém a referência para o carrinho 

  var carrinho = document.getElementById('carrinho');

  //Cria um novo item da lista para o carrinho 

  var li = document.createElement('li');
  li.textContent = item;

  //Adiciona o item ao carrinho 

  carrinho.appendChild(li);
}