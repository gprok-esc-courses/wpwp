<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    
  </head>
  <body>
    
    <div>
        <h1 class="display-3">World Nature News</h1>
        <p class="login-legend">Care about nature and our Planet?<br> Get inside, learn and contribute. Our amazing team is dedicated to a better world!</p>
    <div>
    <?php
        if(isset($_SESSION['error'])) {
            echo "<div class='alert alert-danger' role='alert'>";
            echo $_SESSION['error'];
            echo "</div>";
            unset($_SESSION['error']); 
        }
        if(isset($_SESSION['temp_username'])) {
            $temp_username = $_SESSION['temp_username'];
            unset($_SESSION['temp_username']);
        }
        else {
            $temp_username = "";
        }
    ?>
    <form action="authenticate.php" class="form-inline" method="post">
        <div>
            <label>Name</label>
            <input type="text" placeholder="name" name="username" value="<?=$temp_username;?>">
        </div>
        <div>
            <label>Password</label>
            <input type="password" placeholder="password" name="password">
        </div>
        <div>
            <button type="submit">Go for it!</button>
        </div>
    </form>
    
  </body>
</html>












