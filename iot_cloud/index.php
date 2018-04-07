<?php
 $serverName ="localhost";
 $userName = 'enriquecermar';
 include 'passwords.php';
 $dbName = 'enriquecermar';


 $conn = new mysqli($serverName, $userName, $password, $dbName);
    
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 
 $sql = "SELECT * FROM ID";
 
 $result = $conn->query($sql);
 $a = array();
 
 if ($result->num_rows > 0 ){
     
     while ($row = $result->fetch_assoc()){
         $a[] = $row;
     }
     
 }else {
     echo "No hay datos";
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

    <br>
     <br>


 </div>

<a href="addnewboard.html" class="button is-large is-danger is-centered">
    <span class ='icon'>
        <i class="fas fa-plus"></i> 
    </span>
    <span>Añadir placa</span>

</a>
<span> <h4 style = 'color: #990033' class = 'title has-text-centered'>
 Aquí podrás introducir la placa y sus cualidades
 </h4></span>  
</div> 
</div>

<!-- /*<div class="container">
    <div class="columns is-centered">
        <div id="placas" class="has-text-left column is-half">
                <div id="m-placa" class="box is-primary">
                    <div class="titulo-placa title is-5 has-text-centered">
                        Arduino jardín
                    </div>
                    <div class="desc-placa subtitle is-6 has-text-left">
                        Mantiene tu jardín
                    </div>
                    <div class="sensores is-danger has-text-left">
                        <div>
                        Sensor 1:
                        <span class="sensor1 is-dark">Mide la temperatura </span>
                        </div>

                        <div>
                        Sensor 2: 
                        <span class="sensor2 is-dark">Mide la humedad</span>
                        </div>  
                    </div>
                    <div class="has-text-right">
                        <button class="button is-success">
                            <span class="icon">
                                <i class="fas fa-arrow-right"></i>  
                            </span>
                        </button>
                     </div>
                </div>
                <div id="m-placa" class="box is-primary">
                    <div class="titulo-placa title is-5 has-text-centered">
                        Arduino globo
                    </div>
                    <div class="desc-placa subtitle is-6 has-text-left">
                        Para el experimento del globo aerostático
                    </div>
                    <div class="sensores is-danger has-text-left">
                        <div>
                        Sensor 1:
                        <span class="sensor1 is-dark">Mide la temperatura </span>
                        </div>

                        <div>
                        Sensor 2: 
                        <span class="sensor2 is-dark">Mide la humedad</span>
                        </div>  
                    </div>
                    <div class="has-text-right">
                        <button class="button is-success">
                            <span class="icon">
                                <i class="fas fa-arrow-right"></i>  
                            </span>
                        </button>
                    </div>
                </div>
            </div> -->

  <script>
      var placas = <?php echo json_encode($a) ?>; //json es JavaScript Object Notation, sirve para que entienda el java script el php  
      console.log(placas);
        const contenedorPlacas = document.getElementById('placas');
        placas.forEach(function(e, i){// e para element, i para index
        console.log(e);
        placa.getElementByClassName('titulo-placa')[0].textContent = e.Name;
        placa.getElementByClassName('desc-placa')[0].textContent = e.Description;
        placa.getElementByClassName('sensor1')[0].textContent = e.Sensor1;
        placa.getElementByClassName('sensor2')[0].textContent = e.Sensor2;
        placa.getElementByClassName('enlace-placa')[0].href =`/placa.php?id=${e.ID}`;// va a la placa con el link de la flecha
        contenedorPlaca.appendChild(placa);    


      })
  </script>
</body>
</html>