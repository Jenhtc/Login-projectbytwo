<?php

$username = '';
$email = '';
$password = '';
$confpassword = '';

INCLUDE 'register.php';

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

   <div class="row">
        <h4>New registration</h4>

        <?php
          if($error){
            echo("<ul>$errorMessage</ul>");
          }
        ?>

    <form class="col s12" action="" method="POST">
      
        <!-- Username -->
        <div class="input-field col s6">
          <input name="username" id="username" type="text" value="<?= $username; ?>" class="validate" required>
          <label for="username">Username</label>
        <!-- email -->
        <div class="row">
            <div class="input-field col s12">
              <input name="email" id="email" type="email" value="<?= $email; ?>" class="validate" required>
              <label for="email">Email</label>
            </div>
          </div>
   
    
      <div class="row">
        <div class="input-field col s12">
          <input name="password" id="password" type="password" class="validate" required>
          <label for="password">Password</label>
        </div>
      </div>
<!-- Confirm password -->
      <div class="row">
        <div class="input-field col s12">
          <input name="confpassword" id="confpassword" type="password" class="validate" required>
          <label for="confpassword">Confirm password</label>
        </div>
      </div>

<!--       Submit button    -->      
 <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        <i class="material-icons right">send</i>
      </button>
 
      
    </form>
  </div> 
</div>   
</body>
</html>