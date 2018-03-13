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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">

    
  </head>
  <body>


		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="#">WORLD NATURE NEWS</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Link</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Dropdown
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#">Action</a>
		          <a class="dropdown-item" href="#">Another action</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="#">Something else here</a>
		        </div>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link disabled" href="#">Disabled</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="logout.php">Logout</a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
		  </div>
		</nav>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/nature1.jpg" alt="First slide">
              <div class="carousel-caption">
                        <h3>Forests are life</h3>
                    </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/nature2.jpg" alt="Second slide">
              <div class="carousel-caption">
                        <h3>Stop light pollution</h3>
                    </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/nature3.jpg" alt="Third slide">
              <div class="carousel-caption">
                    <h3>Live according to nature</h3>
                </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

		


    <section id="news">
        <div class="section-content">
            <div class="container">
                
                <h1 class="news-label">Latest news</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero placeat debitis ad vitae repudiandae architecto, ipsum tenetur odio animi nulla nihil deleniti voluptatibus et in incidunt consequuntur! Assumenda, suscipit, sunt!</p>
                
                <hr>
                
                <div class="row">
                    <div class="col-sm-12">
                        
                        <div class="card-deck">
                        	<?php
                        		foreach ($result as $row) {
    						?>

                            <div class="card">
                                <img class="card-img-top" src="img-news/<?=$row['img']?>" alt="<?=$row['title']?>">
                                <div class="card-block">
                                    <h4 class="card-title"><?=$row['title']?></h4>
                                    <p class="card-text"><?=$row['brief']?></p>
                                </div>
                            </div>
                            <?php 
                            	}
                            ?>
                            
                            
                        </div>
                        
                        <hr>
                                         
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <footer id="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <p>WORLD NATURE NEWS.&copy; 2018</p>
                </div>
                <div class="col-sm-5">
                    <i class="fab fa-facebook-square fa-2x"></i> 
                    <i class="fab fa-twitter-square fa-2x"></i>
                    <i class="fab fa-google-plus-square fa-2x"></i>
                    <i class="fab fa-youtube-square  fa-2x"></i>
                    <i class="fab fa-pinterest-square fa-2x"></i>
                    <i class="fab fa-medium fa-2x"></i>
                 </div>
                <div class="col-sm-4">
                    <h6>Disclaimer</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </footer>

		
	    <!-- jQuery first, then Bootstrap JS. -->
	    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
	  		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	  		crossorigin="anonymous"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" integrity="sha384-feJI7QwhOS+hwpX2zkaeJQjeiwlhOP+SdQDqhgvvo1DsjtiSQByFdThsxO669S2D" crossorigin="anonymous"></script>
  </body>
</html>
<?php
	$pdo = null;
?>