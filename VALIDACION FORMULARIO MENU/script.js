/*const sign_in_container = document.querySelector('.form.sign-in-container'),
        sign_up_container = document.querySelector('.form.sign-up-container');

document.addEventListener('click',e =>{
    if(e.target.matches('.ok-account')){
        sign_in_container.style.display = 'block';
        sign_up_container.style.display = 'none';

    }else if(e.target.matches('.no-account')){
        sign_in_container.style.display = 'none';
        sign_up_container.style.display = 'block';
        
    }
})*/
const formulario = document.querySelector('.formulario'),
      inputs = document.querySelectorAll('.formulario input');

document.addEventListener('DOMContentLoaded', function () {
    const sign_in_container = document.querySelector('.form.sign-in-container');
    const sign_up_container = document.querySelector('.form.sign-up-container');

    document.addEventListener('click', function (e) {
        if (e.target.matches('.ok-account')) {
            sign_in_container.style.display = "block";
            sign_up_container.style.display = "none";
            document.querySelector('.error_notify').classList.remove('active');
        } else if (e.target.matches('.no-account')) {
            sign_in_container.style.display = "none";
            sign_up_container.style.display = "block";
            document.querySelector('.error_notify').classList.remove('active');
        }
    });
});


    const expresiones_regulares = {
        nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
        numero: /^.{4,12}$/, 
        /*email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/*/
    }

    
    const campos = {
        name:false,
        numero:false,
    }


    const validarFormulario = (e) => {
        switch (e.target.name) {
            case "nombre":
                validarCampo(expresiones_regulares.nombre,e.target.value,'name');
                break;
            case "numero":
                validarCampo(expresiones_regulares.numero, e.target.value, 'numero')
                break;
            default:
                break;
        }
        
    }

    const validarCampo = (expresion,input,campo) => {
        if (expresion.test(input)) {
            document.getElementById(campo).classList.remove('error');
            campos[campo] = true;
        } else { 
            document.getElementById(campo).classList.add('error');
            campos[campo] = false;
        }
    }

    inputs.forEach((input) => {
        input.addEventListener('keyup', validarFormulario);
        input.addEventListener('blur', () => validarFormulario);
    });


    formulario.addEventListener('submit', e => {
      
        if (campos.name && campos.numero) { 
          /*  document.querySelector('.check_notify').classList.add('active');
            document.querySelector('.error_notify').classList.remove('active');
    
            setTimeout(() => {
                document.querySelector('.check_notify').classList.remove('active');
            }, 5000);*/
    
        } else {
            e.preventDefault();
            document.querySelector('.error_notify').classList.add('active');
            document.querySelector('.check_notify').classList.remove('active');
        }
    })


