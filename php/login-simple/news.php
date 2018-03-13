<?php
session_start();
if(!isset($_SESSION['username'])) {
	$_SESSION['error'] = "Login required";
	if(isset($_POST['username'])) {
		$_SESSION['temp_username'] = $_POST['username'];
	}
	header('Location: login.php');
	die();
}
$pdo = new PDO('mysql:host=localhost;dbname=wpwp', 'test', 'test');

$result = $pdo->query('SELECT * FROM news');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    
  </head>
  <body>


		<div>
		  <a class="navbar-brand" href="#">WORLD NATURE NEWS</a> - 
          <a class="navbar-brand" href="logout.php">Logout</a>
		</div>


        <div>
                
                <h1 class="news-label">Latest news</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero placeat debitis ad vitae repudiandae architecto, ipsum tenetur odio animi nulla nihil deleniti voluptatibus et in incidunt consequuntur! Assumenda, suscipit, sunt!</p>
                
                <hr>
 
                	<?php
                		foreach ($result as $row) {
					?>

                    <div>
                        <img width="200px" class="card-img-top" src="img-news/<?=$row['img']?>" alt="<?=$row['title']?>">
                        <div class="card-block">
                            <h4 class="card-title"><?=$row['title']?></h4>
                            <p class="card-text"><?=$row['brief']?></p>
                        </div>
                    </div>
                    <?php 
                    	}
                    ?>
                    
                
                <hr>
  
        </div>

  </body>
</html>
<?php
	$pdo = null;
?>