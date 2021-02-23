<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ejercicio de php (basico):</h1>
    <?php
/*----------------------------------------------------Nivel 1--*/
echo "<hr/>";
echo "<h2>Nivel 1</h2>";
echo "<h3>Nivel 1: Ejercicio 1</h3>";
/* --Nivel 1 */
/* Ejercicio 1 */
/* Define una variable de cada tipo: integer, double, string y boolean */
$var_int = 1;
$var_double = 10.5;
$var_string1 = "Hola Mundo!!";
$var_bool = True;
echo "Variable int(entera): ". $var_int."<br>";
echo "Variable double(decimal): ". $var_double."<br>";
echo "Variable string(cadena): ". $var_string1."<br>";
echo "Variable bool(booleana:True-False): ". $var_int."<br>";
echo "<hr/>";

echo "<h3>Nivel 1: Ejercicio 2</h3>";
/* Ejercicio 2 */
/* Crea otra variable string: */
/* Imprime el tamaño de las dos cadenas. */
/* Imprime las dos cadenas pero en orden inverso */
/* imprime la concatenacion de las 2 cadenas. */
$var_string2 =" esto es otra cadena.";
echo "Cadena 1: " . $var_string1 ."<br>";
echo "Cadena 2: " . $var_string2 ."<br>";
echo "Tamaño cadena 1: ".strlen($var_string1)."<br>";
echo "Tamaño cadena 2: ".strlen($var_string2)."<br>";
echo "Cadena 1 invertida: ".strrev($var_string1)."<br>";
echo "Cadena 2 invertida: ".strrev($var_string2)."<br>";
echo "Concatenacion de str1 y str2: ".$var_string1.$var_string2."<br>";
echo "<hr/>";

echo "<h3>Nivel 1: Ejercicio 3</h3>";
/* Ejercicio 3 */
/* Crear un constante que incluya tu nombre y imprimela por pantalla */
define("NOMBRE", "Jorge");
echo "Impresion de la constante: ". NOMBRE ."<br>";
echo "<hr/>";

/*----------------------------------------------------Nivel 2--*/
echo "<h2>Nivel 2</h2>";
echo "<h3>Nivel 2: Ejercicio 1</h3>";
/* --Nivel 2 */
/* Ejercicio 1 */
/* Crea 2 arrays con: 5 enteros, 3 enteros */
echo "Declaracion de 2 arrays:<br>";
$num1 = array(2,4,6,8,10);
$num2 = array(1,3,5);
echo "<hr/>";


echo "<h3>Nivel 2: Ejercicio 2</h3>";
/* Ejercicio 2 */
/* Añade un valor mas al array 2 */
echo "Añadir un numero al array 2:<br>";
array_push($num2, 7);
echo "<hr/>";

echo "<h3>Nivel 2: Ejercicio 3</h3>";
/* Ejercicio 3 */
/* Mezcla los 2 array y imprime el array resultante por pantalla. */
echo "Union de los 2 array e impresion: <br>";
$union_array = array_merge($num1, $num2);
echo "Impresion de array-merge: ";
print_r($union_array) ."<br>";
echo "<hr/>";

/*----------------------------------------------------Nivel 3--*/
echo "<h2>Nivel 3</h2>";
echo "<h3>Nivel 3: Ejercicio 1</h3>";
/* Ejercicio 1 */
/* Imprime por pantalla valor a valor el array resultante anterior. */
/* $sal = var_dump($union_array); */
print_r($union_array);
echo "<br>";

echo "Impresion del array (valor a valor): <br>";
foreach($union_array as $i => $valor){
    echo "Indice: " . $i . " - Valor: " . $valor . "<br>";
}
echo "<hr/>";

echo "<h3>Nivel 3: Ejercicio 2</h3>";
/* Ejercicio 2*/
/* Declarar 2 variables tipo int X e Y, 2 variables N y M tipo double y asigna un valor a cada una. Muestra por pantalla X e Y. */
/* Muestra el valor, suma, resta, producto, division, modulo */
echo "Nivel 3: Ejercicio 2:<br>";
$X = 5;
$Y = 6;
$N = 5.5;
$M = 6.7;
echo "Operaciones con X e Y: <br>";
echo "Valor de la variable: X = " . $X . "<br>";
echo "Valor de la variable: Y = " . $Y . "<br>";
echo "Suma de X: ". $X . " + Y: ". $Y . " = " . ($X+$Y) ."<br>";
echo "Resta de X: ". $X . " - Y: ". $Y . " = " . ($X-$Y) ."<br>";
echo "Producto de X: ". $X . " * Y: ". $Y . " = " . $X*$Y ."<br>";
echo "Division de X: ". $X . " / Y: ". $Y . " = " . $X/$Y ."<br>";
echo "Modulo de X: ". $X . " % Y: ". $Y . " = " . $X%$Y ."<br>";
echo "<hr/>";
echo "Operaciones con N e M: <br>";
echo "Valor de la variable: N = " . $N . "<br>";
echo "Valor de la variable: M = " . $M . "<br>";
echo "Suma de N: ". $N . " + M: ". $M . " = " . ($N+$M) ."<br>";
echo "Resta de N: ". $N . " - M: ". $M . " = " . ($N-$M) ."<br>";
echo "Producto de N: ". $N . " * M: ". $M . " = " . $N*$M ."<br>";
echo "Division de N: ". $N . " / M: ". $M . " = " . $N/$M ."<br>";
echo "Modulo de N: ". $N . " % M: ". $M . " = " . $N%$M ."<br>";
echo "<hr/>";

?>
</body>
</html>