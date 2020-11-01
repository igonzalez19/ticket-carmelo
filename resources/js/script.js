//funcion inmediatamente invocada
(function () {
    alert("seguro que quieres borrar el ticket?");
    //todo lo declararo aqui es privado, ya que el ambito de vida d es el de la misma función
    var enlaceBorrar = document.getElementById("enlaceBorrar");
    var enlacesBorrar = document.getElementsByClassName('enlaceBorrar');
    
    for(var i = 0; i < enlacesBorrar.length; i++){
        
        enlaceBorrar[i].addEventListener('clik', getConfirmation2());
    }
    
    if(enlaceBorrar){
        enlaceBorrar.addEventListener('click',getConfirmation());
    }
    
    
    
    function getConfirmation(){
        var retVal = confirm("seguro que quieres borrar el ticket?");
        if(retVal){
          var formDelete = document.getElementById('formDelete');
          formDelete.submit();
        } 
    }
    
    function getConfirmation2(){
        var retVal = alert("seguro que quieres borrar el ticket?");
        if(retVal){
          var formDelete = document.getElementById('formDelete');
          formDelete.submit();
        } 
    }
})();