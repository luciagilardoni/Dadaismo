<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dadaísmo | Busqueda</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Truculenta:opsz,wght@12..72,500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Truculenta:opsz,wght@12..72,100&display=swap" rel="stylesheet">    


    <link rel="stylesheet" href="css/style.css">
</head>
<body> 
<header>
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container-fluid ms-5 me-5">
              <a class="navbar-brand" href="index.html">
                  <img src="img/logo png.png" width="100"> 
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse menu" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="historia.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Historia
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="origenes.html">Orígenes</a></li>
                      <li><a class="dropdown-item" href="generos.html">Géneros</a></li>
                    </ul>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="artistas.html">Artistas</a></li>
                  <li class="nav-item"><a class="nav-link" href="galeria.html">Galeria</a></li>
                  <li class="nav-item"> <a class="nav-link" href="filosofia.html">Filosofía</a></li>
                  <li class="nav-item"> <a class="nav-link" href="contacto.html">Contacto</a></li>
                </ul>

                  <form class="d-flex" method="post" action="resultados_buscar.php">
                    <input class="form-control me-2" type="search"  placeholder="Buscar..." aria-label="Search" name="buscar">
                    <button class="btn btn-outline-success" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </form>
          
              </div>
            </div>
          </nav>
                
    </header>
<section>
<?php
	include('conexion.php');

	$buscar = $_POST['buscar'];
	echo "Su consulta: <em>".$buscar."</em><br>";

	$consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%' OR apellido LIKE '%$buscar%' ");
?>

	<p>Cantidad de Resultados: 
	<?php
		$nros=mysqli_num_rows($consulta);
		echo $nros;
	?>
	</p>
    
	<?php
		while($resultados=mysqli_fetch_array($consulta)) {
	?>
    <p>
    <?php	
			echo "<div class='titulos pt-2'>".$resultados['nombre'] . " ";
			echo $resultados['apellido'] . "</div>";
			echo $resultados['bio'];
			
	?>
    </p>
	<img src="<?php echo $resultados['foto']; ?>">

    <hr/>
    <?php
		}

		mysqli_free_result($consulta);
		mysqli_close($conexion);

	?>

</section>
<footer class="container-fluid p-3">
        <div class="container footer">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 text-center">
                <span> © 2022 DADAISMO. TODOS LOS DERECHOS RESERVADOS- POLITICA DE PRIVACIDAD. </span>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 d-flex justify-content-around footer">
                    <div><a href="https://www.instagram.com" target="_blank"> <i class="fa fa-instagram"></i></a> </div>      
                    <div><a href="https://www.facebook.com" target="_blank"> <i class="fa fa-facebook-square"></i> </a> </div>
                    <div><a href="https://twitter.com" target="_blank"> <i class="fa fa-twitter"></i> </a> </div>
            </div> 
            </div>
        </div>

    </footer>
</body>
</html>