<form action="exercise-03.php" method="POST">

	A: <input type="number" name="a">
    B: <input type="number" name="b">
    C: <input type="number" name="c">

	<button type="submit">Enviar</button>
</form>
<?php    
/**
   Faça uma página web que leia três numeros inteiros
   em seguida mostre o maior e o menor deles
 */

    $greater = max(@$_REQUEST);
    $less = min(@$_REQUEST);
    print "maior: ".$greater."  menor: ".$less;

?>