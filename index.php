<html>
<head>
<title>practica 12 php</title>
</head>
<body>
    <?php
    //marvin
    //Usando variables en PHP
     echo "<h1>variables</h1>";
	 $nombre='Marvin'; //tipo cadenas
	 $apellidos='Pacheco Diaz';
	 $edad=23;
	 $salario=4800;
	 $fechaNacimiento='21/03/1995';
	 $estatus=true;
	 echo $nombre.'<br/>';
	 echo $apellidos.'<br/>';
	 echo 'NOMBRE:'.$nombre.' '.$apellidos.'<br/>';
	 echo 'EDAD:'.$edad.'<br/>';
	 echo 'SALARIO:'.$salario.'<br/>';

?>
<h1>OPERADORES ARITMETICAS</h1>
<?php
     $a=5;
     $b=3;
     $suma=$a+$b;
     $resta=$a-$b;
     $multiplica=$a*$b;
     $divide=$a/$b;
     echo 'la suma de '.$a.'+'.$b.' es: '.$suma.'<br/>';
     echo 'la resta de '.$a.'-'.$b.' es: '.$resta.'<br/>';
     echo 'la multiplicacion de '.$a.'*'.$b.' es: '.$multiplica.'<br/>';
     echo 'la division  de '.$a.'/'.$b.' es: '.$divide.'<br/>';	 
 ?>
</body>
</html>