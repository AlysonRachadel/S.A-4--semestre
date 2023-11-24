document.addEventListener('DOMContentLoaded', function() {
  const registerBtn = document.getElementById('register');
  const container = document.getElementById('container');
  const loginBtn = document.getElementById('login');
 

  registerBtn.addEventListener('click', () => {
    container.classList.add('active');
  });

  loginBtn.addEventListener('click', () => {
    container.classList.remove('active');
  });
});

function adicionarcarrinho() {
  var combofamilia = document.getElementById('combofamilia');
  var erromsg = document.getElementById('erromsg');
  erromsg.textContent = '';

  // Coleta os subitens selecionados
  var subitens = combofamilia.querySelectorAll('input[type="checkbox"]:checked');
  var subitensValores = [];

  subitens.forEach(function (subitem) {
    subitensValores.push(subitem.value);
  });

  if (subitensValores.length > 0) {
    // Adiciona o item principal e os subitens à URL
    var valorcombofamilia = "Item principal - R$ 85.00";
    var url = 'carrinho.php?item=' + encodeURIComponent(valorcombofamilia);
    url += '&subitens=' + encodeURIComponent(subitensValores.join(','));

    console.log('Redirecionando para:', url);

    // Redireciona para a página do carrinho
    window.location.href = url;
  } else {
    console.log('Nenhum subitem selecionado. Exibindo mensagem de erro.');
    erromsg.textContent = "Selecione pelo menos um sabor";
  }
}

var btnCarrinho = document.getElementById('btn-carrinho');
btnCarrinho.addEventListener('click', adicionarcarrinho);


/*
function adicionaritem(item) {
  console.log('Função adicionaritem executada com item:', item);

  // Obtém a referência para o carrinho 
  var carrinho = document.getElementById('carrinho');
  console.log('Elemento carrinho:', carrinho);
  // Cria um novo item da lista para o carrinho 
  var li = document.createElement('li');
  li.textContent = item;

  // Adiciona o item ao carrinho 
  carrinho.appendChild(li);
}*/ 