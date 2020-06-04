
<div class="row shadow contain_pagination_liste row">
         <div class="col-md-4 ">
            <img src="public/images/img-bg.jpg" alt="..." class="img-thumbnail">
            <img src="public/images/img-bg.jpg" alt="..." class="img-thumbnail">
         </div>
         <div class="col-md-8 ">

            <div class="contain_pagination shadow" id="admin">
               <div class="btn_haut row">
                  <div class="col-md-9 ">
                     <button type="button" id="listequestion" class="btn btn-secondary btn-lg btn_pour_admin">Liste<br/>Question</button>
                     <!--<button type="button" id="listequestion" class="btn btn-secondary btn-lg btn_pour_admin">Liste<br/>Question</button>-->
                     <button type="button" id="creeradmin" class="btn btn-primary btn-lg btn_pour_admin">Creer<br/>Admin</button>
                     <button type="button" id="listejoueur" class="btn btn-primary btn-lg btn_pour_admin">Liste<br/>Joueur</button>
                     <button type="button" id="creerquestion" class="btn btn-primary btn-lg btn_pour_admin">Creer<br/>Question</button>
                  </div>
                  <div class="col-md-3">
                        <a href="./pages/deconnexion.php">DECONNEXION</a>
                  </div>
               </div>
               <?php
                  var_dump($_GET['action']);
                  if(isset($_GET['action']) && $_GET['action']=='listequestion'){
                      require_once("./pages/listequestion.php");
                  }
               ?> 

               
               

            </div>
            
         </div>

   		
   	</div>

      <script type="text/javascript" src="./public/js/router_admin.js"></script>
