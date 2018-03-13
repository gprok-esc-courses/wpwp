<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../bootstrap/simple/css/bootstrap.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    
  </head>
  <body>
    
    <section id="login-area">
        <div id="login-area-caption">
            <div class="container">
                <div class="col-sm-10 col-sm-offset-1">
                    <h1 class="display-3">World Nature News</h1>
                    <p class="login-legend">Care about nature and our Planet?<br> Get inside, learn and contribute. Our amazing team is dedicated to a better world!</p>
                    
                    <div class="form-div">
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
                        <div class="form-group">
                            <label class="sr-only">Name</label>
                            <input type="text" class="form-control form-control-lg" placeholder="name" name="username" value="<?=$temp_username;?>">
                        </div>
                        <div class="form-group">
                            <label class="sr-only">Password</label>
                            <input type="password" class="form-control form-control-lg" placeholder="password" name="password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-lg">Go for it!</button>
                        </div>
                    </form>
                    </div>

                    
                    
                </div>
            </div>
        </div>
    </section>
    
    
    
    

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="../../bootstrap/simple/js/bootstrap.min.js"></script>
  </body>
</html>












