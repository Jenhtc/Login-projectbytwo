<?php
// PAGE DE LOG IN
session_start();


include 'session.php';


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
    <title>MySpace - Log in</title>
</head>
<body>
<div class="container"> 

<div class="row">
        <h4>Log yourself babe</h4>

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
              <input name="password" id="password" type="password" value="<?= $password; ?>" class="validate" required>
              <label for="password">Password</label>
            </div>
          </div>
<!-- Link to create new account -->
        <div class="account"> 
            <a href="signup.php" alt="Link to sign up"> No account yet ? Come here to create yours baby </a>
<br><br>


<!--       Submit button    -->      
<button class="btn waves-effect waves-light" type="submit" name="action">Submit
        <i class="material-icons right">send</i>
      </button>
 
      
    </form>
</div>
</body>
</html>