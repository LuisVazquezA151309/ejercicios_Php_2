<html>
<head>
    <title>Ejercicio 3</title>
    <meta charset="utf-8"/>
      <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body bgcolor="#F1C40F">
   
   
 <header>
    <div class="logo">
             <a href="index,html">PHP</a>
        </div>			 
        <center>
        <table width="auto" height="auto" > 
                <nav class="menu">
               	<ul>
                    <li><a href="Ejercicio_1.php">1</a></li>
                      <li><a href="Ejercicio_2.php">2</a></li>
                       <li><a href="Ejercicio_3.php">3</a></li>
                       <li><a href="Ejercicio_4.php">4</a></li>
                       <li><a href="Ejercicio_5.php">5</a></li>
                       <li><a href="Ejercicio_6.php">6</a></li>
					   <li><a href="Ejercicio_7.php">7</a></li>
					   <li><a href="Ejercicio_8.php">8</a></li>
					   <li><a href="Ejercicio_9.php">9</a></li>
					   <li><a href="Ejercicio_10.php">10</a></li>
				</ul>
                </nav>
            </div>
</header>
        
         
            <div class="container">
                    <br>
                    <br>
            </div>
                     <div ALIGN=left><h3> PROGRAMACION DE APLICACIONES WEB</h3></div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div align=center><h4>Mostrar en pantalla una tabla de 1 por 10</h4></div>
     <br>
     <br>
    <?php
      
    echo "<h2>BUCLE WHILE </h2><br>";
    echo "<table border=1>";
    
        for($i=0;$i<10;$i++)
        {
              
            echo "<tr>"."<td>"."<font color=red>"."Linea".$i."</tr>"."</td>";
        }
    	echo "</font>";
     echo "</table>";
    echo "</br>"; 
    ?>
                    
     <right><a href="index.php">Regresar al menu</a></h2></right>
      <br>
    <br>
    

    <P>LUIS ANGEL VAZQUEZ DELGADO</P>
   
    
                
                
                </div>
            </section>
   
   
   

    </body>
</html> 