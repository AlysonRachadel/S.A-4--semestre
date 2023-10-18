const registerBtn = document.getElementById('register');
const container = document.getElementById('container');

const loginBtn= document.getElementById('login');


registerBtn.addEventListener('click', () => 
{
container.classList.add("active");
});

loginBtn.addEventListener('click', () => 
{
container.classList.remove("active");
});

const myModal = document.getElementById('teste')
const myInput = document.getElementById('testee')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})