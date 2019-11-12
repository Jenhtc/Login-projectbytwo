<?php
session_start();
include 'dbconnect.php';
include 'edit.php';
/* echo($_SESSION['userID']); */
$collectingusername='';
$collectingmail='';
$collectingfirstname='';
$collectinglastname='';
$collectinglk='';
$collectingGH='';

if(isset($_SESSION['userID'])){
    connexiondb();
    $sqlcheck = connexiondb();
$sqlrequest = $sqlcheck->prepare('SELECT * FROM student WHERE id=?');
$sqlrequest->execute(array($_SESSION['userID'])); 
$collectdata=$sqlrequest->fetch();

$collectingusername=$collectdata['username'];
$collectingmail=$collectdata['email'];
$collectingfirstname=$collectdata['first_name'];
$collectinglastname=$collectdata['last_name'];
$collectinglk=$collectdata['linkedin'];
$collectingGH=$collectdata['github'];

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">   
    
    <title>MySpace</title>

</head>
<body>
<div class="container"> 

   
        <h4>Your profile</h4>
        <a href="logout.php" class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>Log out</a>
        <a href="delete.php" class="waves-effect waves-light btn"><i class="material-icons left">clear</i>Delete profile</a>
        <?php
          if($error){
            echo("<ul>$errorMessage</ul>");
          }
        ?>

    <form class="col s12" action="" method="POST">
      
        <!-- Username -->
        <div class="row">
        <div class="input-field col s12">
          <input disabled name="username" id="username" type="text" value="<?= $collectingusername; ?>" class="validate" required>
          <label for="username">Username</label>
          </div>
          </div>

        <!-- email -->
        <div class="row">
            <div class="input-field col s12">
              <input name="email" id="email" type="email" value="<?= $collectingmail; ?>" class="validate" required>
              <label for="email">Email</label>
            </div>
            </div>
       

     <!-- first name -->
     <div class="row">
          <div class="input-field col s6">
          <input name="first_name" id="first_name" type="text" value="<?= $collectingfirstname; ?>" class="validate" required>
          <label for="first_name">First name</label>
          </div>
       

    <!-- Last name -->
   
        <div class="input-field col s6">
          <input name="last_name" id="last_name" type="text" value="<?= $collectinglastname; ?>" class="validate" required>
          <label for="last_name">Last name</label>   
          </div>
    </div>
    <!-- password -->
      <div class="row">
        <div class="input-field col s6">
          <input name="password" id="password" type="password" class="validate" required>
          <label for="password">Password</label>
        </div>
      
<!-- Confirm password -->
     
        <div class="input-field col s6">
          <input name="confpassword" id="confpassword" type="password" class="validate" required>
          <label for="confpassword">Confirm password</label>
      </div>
      </div>

<!-- Linkedin -->
<div class="row">
<div class="input-field col s12">
          <input name="linkedin" id="linkedin" type="text" value="<?= $collectinglk; ?>" class="validate" required>
          <label for="linkedin">LinkedIn</label>  
         
          </div>
          </div>

    <!-- Github -->
    <div class="row">
<div class="input-field col s12">
          <input name="github" id="github" type="text" value="<?= $collectingGH; ?>" class="validate" required>
          <label for="github">Github</label>  

</div>
</div>

<!--       Submit button    -->      
 <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        <i class="material-icons right">send</i>
      </button>
 
      
    </form>
   
</div>   
</body>
</html>