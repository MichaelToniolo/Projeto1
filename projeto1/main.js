/*let container = document.querySelector('div');
let input =document.querySelector('input');
let icon = document.querySelector('img');

icon.addEventListener('click' function(){
    container.classList.toogle('visible');
    if(container.classList.contains('visible')){
        icon.src ='asset/eye-off.svg';
        input.type = 'text';
    }else{
        icon.src = 'asset/eye.svg';
        input.type = 'password';
    }
});*/
function mostrarsenha(){
    var tipo = document.getElementById("senha");
    if(tipo.type == "password"){
        tipo.type ="text";
    }else{
        tipo.type = "password";
    }

}
