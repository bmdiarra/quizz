const form =document.getElementById('connexion-form');
const container=document.getElementById('container');
const inscription = document.getElementById('inscription');
const listequestion = document.getElementById('listequestion');
const admin = document.getElementById('admin');
const form_ins = document.getElementById('form-inscription');

inscription.addEventListener('click',()=>{
    sendData('inscription',container,false);
})

form.addEventListener('submit',()=>{
     
    sendData('connexion',container,true);

})

try {
    form_ins.addEventListener('submit',()=>{
        
        sendData('inscri',container,true);
    })

  container.addEventListener((change)=>{
    

    listequestion.addEventListener('click',()=>{
     
        sendData('listequestion',admin,false);
    
    
    })
  })
    

} catch (error) {
    
}


/*
function listeq(){
    sendData('listequestion',admin,false);
}
*/
//action  page que la fonction de doit ouvrir
//contenair c'est ccontainer d"ou la page resultant doit etre affocher 
//is_post si la requette sera envoyer avec un formulaire; 
function sendData(action,conten,is_post)
{
    var ajx= new XMLHttpRequest();
    ajx.onreadystatechange=()=>
    {
        if((ajx.readyState==4) && ajx.status==200)
        {
            let data=ajx.responseText;
            
            if(data=="error")
            {
                  alert(" une erreur s est produit");
            }
            else
            {
               //conten.innerHTML="";
                conten.innerHTML=data;
            }
        }
    } 

    var donnee="";
    if(is_post)
    {
        donnee=getFormData();
    }
    ajx.open('POST',`index.php?action=${action}`,true);
    ajx.send(donnee);
}

// la function qui va recupéré les données du formulaire

function getFormData()
{
    //connexion-form
    var form=document.getElementById('connexion-form');

    // FormData est une fonction JS predefini 
    // on lui passe le id d'un formulaire il recupere tout les données et le place dans une variable

    var donnee=new FormData(form);

   return donnee;
}

