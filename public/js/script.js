
function fileContentLoader(target, fileName, data={date:0}){
   
    target.load(`pages/${fileName}`,data,function(response, status,detail){        
         if(status === 'error'){
             
            $("#contain_admin").html(`<p class="text-center alert alert-danger col">Le contenu demandé est introuvable!</p>`);
            //ou bien
            //$("#table").html(`<p class="text-center alert alert-danger col">Code Erreur : ${detail.status}, ${detail.statusText}</p>`);
        }
    });
}










//Events
$('form')

$(document).ready(function(){
    const contain_admin = $('#contain_admin');
    
    fileContentLoader(contain_admin,'listequestion.php');
})

//Link
$('.btn_pour_admin').click(function(e){
    const contain_admin = $('#contain_admin');
    
    if(e.target.id === 'listequestion'){
        fileContentLoader(contain_admin,'listequestion.php');
    }else if(e.target.id === 'creeradmin'){
        fileContentLoader(contain_admin,'creeradmin.php');
    }
});
