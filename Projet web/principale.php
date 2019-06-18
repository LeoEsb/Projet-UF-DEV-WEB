<html>
    <head>
        <meta charset="utf-8">
     <style>
#formulaire{
    text-align: center;
    padding-top:20px;
}

     </style>
    </head>
    <body>
        <div id="content">
                                
            <!-- tester si l'utilisateur est connecté -->
            <?php
               session_start();
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:connexion.php");
                   }
                }
                else if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message
                    echo "<h1><center>Bonjour $user, vous êtes connectés</center></h1>";
                }
            ?>
 <a href='principale.php?deconnexion=true'><span><center><h2>Déconnexion</h2></center></span></a>
 <br>
<br>
<br>           
<form id="formulaire" method="POST">
    <label>Ecrivez la phrase que vous voulez modifier dans à Propos:</label><br>

    <textarea name="propos" rows="4" placeholder="Ecrivez votre phrase ici :"></textarea>   <br>
    <input type="submit" name="modifpropos" value="Envoyer" />
</form>

<?php   
$bdd = new PDO('mysql:host=leoessomnkroot.mysql.db;dbname=leoessomnkroot;charset=utf8', 'leoessomnkroot', 'Ilajat79');
$reponse = $bdd->query('SELECT * FROM moncv');

if(isset($_POST['propos']) && isset($_POST['modifpropos'])) {
  $newpropos = $bdd->prepare("
  UPDATE moncv
  SET 
  propos = '".addslashes($_POST['propos'])."'
  ");
$newpropos->execute();
  }
?>
 


<form id="formulaire" method="POST">
    <label>Ecrivez la phrase que vous voulez modifier dans Formation:</label><br>
    <textarea name="parcours" rows="4" placeholder="Ecrivez votre phrase ici :"></textarea>   <br>
    <input type="submit" name="modifforma" value="Envoyer" />
</form>

<?php   
$bdd = new PDO('mysql:host=leoessomnkroot.mysql.db;dbname=leoessomnkroot;charset=utf8', 'leoessomnkroot', 'Ilajat79');
$reponse = $bdd->query('SELECT parcours FROM formation');

if(isset($_POST['parcours'])&& isset($_POST['modifforma'])) {
  $newformation = $bdd->prepare("
  UPDATE formation
  SET 
  parcours = '".addslashes($_POST['parcours'])."'
  ");
$newformation->execute();
  }


?>  


<form id="formulaire" method="POST">
    <label>Ecrivez la date que vous voulez modifier dans Formation:</label><br>
    <textarea name="date" rows="4" placeholder="Ecrivez votre date ici :"></textarea>   <br>
    <input type="submit" name="modifforma" value="Envoyer" />
</form>

<?php   
$bdd = new PDO('mysql:host=leoessomnkroot.mysql.db;dbname=leoessomnkroot;charset=utf8', 'leoessomnkroot', 'Ilajat79');
$reponse = $bdd->query('SELECT parcours FROM formation');

if(isset($_POST['date'])&& isset($_POST['modifforma'])) {
  $newdate = $bdd->prepare("
  UPDATE formation
  SET 
  date = '".addslashes($_POST['date'])."'
  ");
$newdate->execute();
  }


?>      
    </body>
</html>			