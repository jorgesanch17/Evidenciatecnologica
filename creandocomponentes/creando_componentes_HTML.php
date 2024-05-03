 <html>
<head>
<title>Ejemplo básico de PHP: Creación de elementos XHTML</title>
</head>
<body>

<?php
$nombre = "Jorge";
$apellido = "Sanchez";
echo('<h2>'.$nombre .$apellido .' Bienvenidos al Mundo de la Programación para Web</h2>
        <h3>Para comenzar, puedes revisar:</h3>
        <ul>
         <li>Manual PHP5: <a href="http://www.desarrolloweb.com/php/"> http://www.desarrolloweb.com/php/</a> </li>
         <li>Repositorio de clases PHP. <a href="http://www.phpclasses.org/">http://www.phpclasses.org/</a> </li>
    </ul>
    <label> Escribe tu nombre: </label>
    <input type="text"/><br><br>
    <img src="unnamed.jpg"/>
    <p> Escudo del Barcelona </p>
    ');
?>
</body>
</html>