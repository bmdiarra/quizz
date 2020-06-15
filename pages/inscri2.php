<form class="" id="form-inscription" method="post">
        
                 <div class="bg_forminscription row">

                  <div class="col-md-6">
                     <div class="form-group">
                         <label for="formGroupExampleInput">Prenom</label>
                         <input type="text" class="form-control" name="prenom_ins" id="prenom_ins" placeholder="Login">
                     </div>

                     <div class="form-group">
                         <label for="formGroupExampleInput">Nom</label>
                         <input type="text" class="form-control" name="nom_ins" id="nom_ins" placeholder="Login">
                     </div>

                     <div class="form-group">
                         <label for="formGroupExampleInput">Login</label>
                         <input type="text" class="form-control" name="login_ins" id="login_ins" placeholder="Login">
                     </div>

                     <div class="form-group">
                         <label for="formGroupExampleInput">Password</label>
                         <input type="text" class="form-control" name="pwd_ins" id="pwd_ins" placeholder="Login">
                     </div>

                     <div class="form-group">
                         <label for="formGroupExampleInput">Confirm Password</label>
                         <input type="text" class="form-control" name="conf_pwd_ins" id="con_pwd_ins" placeholder="Login">
                     </div>

                     <div>
                        <button id="btn_inscrire" type="submit" class="btn btn-primary btn-lg btn-block">Inscrire</button>
                     </div>

                  </div>
                  
                  <div class="div_avatar col-md-6">
                     
                     <p class="txt_avatar"><strong>AVATAR</strong></p>
                     <div>
                        <img src="public/images/bmd.jpeg" class="rounded-circle avatar_joueur" alt="...">
                     </div>
                     <div>
                        <input type="file" name="avatar_ins" id="avatar_ins" class="btn btn-primary btn-lg btn-block" value="Choisir Avatar"/>
                     </div>

                  </div> 

			      </div>

			   </form>

<script>
   $(document).ready(function(){
      
      $('#btn_inscrire').click(function(){
         
        const prenom_ins = $('#prenom_ins').val();
        const nom_ins = $('#nom_ins').val();
        const login_ins = $('#login_ins').val();
        const pwd_ins = $('#pwd_ins').val();
        
        $.ajax({
                type: "POST",
                url: "http://localhost/QUIZZ_BD/data/modif.php",
               
                data: {prenom_ins:prenom_ins, nom_ins:nom_ins, login_ins:login_ins, pwd_ins:pwd_ins},
                dataType: "JSON",
                success: function (data) {
                   alert(data);
                }
                
            });
    });
   });

</script>


