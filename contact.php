 <link rel="stylesheet" type="text/css" href="portfolio.css">
 <?php 

                      if(isset($_POST['buton'])){
                      extract($_POST);


                             if (!empty($nom) && !empty($email) && !empty($message)){
                        

                            include 'database.php';
                              global $db; 
                             $q = $db->prepare('INSERT INTO formulaire(nom,email,message) VALUES(?,?,?)');
                             $q->execute([
                              $nom,
                              $email,
                              $message,
                               ]); 
                             // header('Location: formulaire.php');
                      }         

                    }
                 
                     ?> 

      <div class="page-pilule">
    <a href="portfolio.html" target="_self" class="fil-arian"><-page </a> 
         <img src="imgport/reseautout" alt="photo des reseau sociau" width="500">   

   
    <div class="formul-element">

      <form  action="contact.php" method="post" autocomplete="off" >

         
      <div class="formul-titre"><h1>Me contacter</h1>

          <div class="form-bloc">

              <label for="nom" class="label-form"> Nom</label><br>
              <input type="text" name="nom" id="nom" placeholder="Votre Nom"  /><br>

              <label for="email" class="label-form"> Adresse mail</label><br>
              <input type="email" name="email" id="email" placeholder="Votre Email"  required=""/><br>

               <label for="message" class="label-form"> Message </label><br>
               <textarea type="text" name="message" id="message" placeholder="votre message" /></textarea><br>

              <input type="submit" name="buton" id="buton" /><br>
          </div>

           </div>

      </form>
    </div>
    </div>
