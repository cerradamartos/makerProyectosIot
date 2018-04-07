<?php
$serverName ="localhost";
$userName = 'enriquecermar';
include 'passwords.php';
$dbName = 'enriquecermar';

$id=$_GET['id'];

//Create connection
$conn = new mysqli($serverName, $userName, $password, $dbName);

//Checks connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$board_query="SELECT * FROM ID WHERE ID=$id";

$board_result=$conn->query($board_query);

$data = array();

if($board_result->num_rows > 0){
    while($row = $board_result->fetch_assoc()){
        $data = $row;
    }

}else{
    echo = 'No existe la placa';
}
$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
    <link rel="stylesheet" href="styles/stylesheet.css">
    <link rel="stylesheet" href="styles/bulma.css">
    <script src='scripts/script.js'></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<body>
    <nav class = 'navbar is-primary'><!-- hacemos una nav bar con color turquesa (ver bulma.io) -->
            <div class ='navbar-brand'>
                <div class="navbar-item">
                <span class="icon">
                <i class="fas fa-cloud"></i>
                </span>  
                <h2 class = "title is-6">Maker Proyects Iot Cloud</h2>
                </div>
            
            </div>
            <div class='navbar-end'>
                <div class="navbar-item">
                    <a href="" class ="navbar-link">Inicio</a>
                </div>
                <div class = 'navbar-item'> <!--creamos un apartado item y dentro de este item creamos un botón (el botón lleva al repositorio)-->
                    <a 
                        href = 'https://github.com/cerradamartos/makerProyectosIot' 
                        class ='button is-dark'
                        target="_blank"
                        >
                            <span class ="icon">
                            <i class="fab fa-github"></i>
                            </span>
                    <span>Github</span> 
                    </a>
                </div>
            </div>
    </nav>

    <script>
        const datosPlaca = <?php echo json_encode($data)?>;
    </script>
</body>
</html>
