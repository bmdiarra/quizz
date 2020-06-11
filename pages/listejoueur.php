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
                      <button type="button" class="btn btn-danger btn-lg">suppr</button>
                      <button type="button" class="btn btn-primary btn-lg">modif</button>
                      </td>
                    </tr>
                    
                  </tbody>
                </table>
                
                <div class="">
                  <button type="button" class="btn btn-primary btn-lg btn_bas_listejoueur_admin">Precedent</button>
                  <button type="button" class="btn btn-primary btn-lg btn_bas_listejoueur_admin">Suivant</button>
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
            
            //  Scroll
        const scrollZone = $('#scrollZone')
        scrollZone.scroll(function(){
        //console.log(scrollZone[0].clientHeight)
        const st = scrollZone[0].scrollTop;
        const sh = scrollZone[0].scrollHeight;
        const ch = scrollZone[0].clientHeight;

        console.log(st,sh, ch);
        
        /*if(sh-st <= ch){
            $.ajax({
                type: "POST",
                url: "http://localhost/LIVE_AJAX/data/getVentes.php",
                data: {limit:7,offset:offset,date:date},
                dataType: "JSON",
                success: function (data) {
                    
                    printData(data,tbody);
                    offset +=7;
                }
            });
        }*/
           
        })
    });

    

    function printData(data,tbody){
      
        $.each(data, function(indice,Personnage){
          
            tbody.append(`
            <tr class="text-center">
                <th scope="row">${Personnage.Num_personnage}</th>
                <td>${Personnage.Prenom_personnage}</td>
                <td>${Personnage.Nom_personnage}</td>
                <td>${Personnage.Score_personnage}</td>
                <td> 
                    <button type="button" id="suppr" onclick="delete(${Personnage.Num_personnage});" class="btn btn-danger btn-lg">suppr</button>
                    <button type="button" id="modif" class="btn btn-primary btn-lg">modif</button>
                </td>
            </tr>
        `);
    });
}

$("#suppr").click({
      
    })


</script>