<div class="contain_liste liste_joueur_admin">
                <h4 class="text_joueur">Liste Joueur</h4>

                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Prenom</th>
                      <th scope="col">Score</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody id="tbody">
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                      <td>
                      <button type="button" onClick="delete_per();" class="btn btn-danger btn-lg">suppr</button>
                      <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-lg">modif</button>
                      </td>
                    </tr>
                    
                  </tbody>
                </table>
                
                <div class="">
                  <button type="button" class="btn btn-primary btn-lg btn_bas_listejoueur_admin">Precedent</button>
                  <button type="button" class="btn btn-primary btn-lg btn_bas_listejoueur_admin">Suivant</button>
               </div>

                </div>

                <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <?php require_once("./inscri.php"); ?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

                

              <script>


    $(document).ready(function(){
      
       // const date = $('#date').val();
        let offset = 0;
        const tbody = $('#tbody');
        $.ajax({
                    
                type: "POST",
                url: "http://localhost/QUIZZ_BD/data/get.php",
                data: {limit:7,offset:offset},
                dataType: "JSON",
                success: function (data) {
                  
                    tbody.html('')
                    printData(data,tbody);
                    offset +=7
                }
            });       
          
    });

    

    function printData(data,tbody){
      
        $.each(data, function(indice,Personnage){
          let id = Personnage.Num_personnage;
            tbody.append(`
            <tr class="text-center" id="+${Personnage.Num_personnage}+">
                <th scope="row">${Personnage.Num_personnage}</th>
                <td>${Personnage.Prenom_personnage}</td>
                <td>${Personnage.Nom_personnage}</td>
                <td>${Personnage.Score_personnage}</td>
                <td> 
                    <button type="button" id="suppr" onClick="delete_perso("+${Personnage.Num_personnage}+");" class="btn btn-danger btn-lg">suppr</button>
                    <button type="button" id="modif"  onClick="modifi_perso(6);" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-lg">modif</button>
                </td>
            </tr>
        `);
        
        

    });
}



function delete_perso(id){
  if(confirm('are You sure?')){
         
         $.ajax({

              type:'post',
              url:'http://localhost/QUIZZ_BD/data/delete.php',
              data:{delete_id:id},
              success:function(data){
                console.log(data);
                  $("#"+id).hide('slow');
              }
         });
       }

}

function modifi_perso(id){
        const prenom_ins = $('#prenom_ins').val();
        const nom_ins = $('#nom_ins').val();
        const login_ins = $('#login_ins').val();
        const pwd_ins = $('#pwd_ins').val();
        const avatar_ins = $('#avatar_ins').val();
        console.log(prenom_ins);
  $.ajax({
        type: "POST",
        url: "http://localhost/QUIZZ_BD/data/modif.php",
        //data: $('form').serialize(),
        data: {Num_personnage:id,nom_ins:prenom_ins,nom_ins:nom_ins,login_ins:login_ins,pwd_ins:pwd_ins,avatar_ins:avatar_ins},
        dataType: "JSON",
        success: function (data) {
              console.log(data);
            }
        });
          
}


</script>