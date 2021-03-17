<form action="exercise-04.php" method="POST">
	Digite um dia da semana (1-7)
	<input type="number" name="week" min="1" max="7">
    Escolha o início da semana
    <select name="week_start">
		<option value="1"> Domingo </option>
		<option value="2"> Segunda-feira </option>
	</select>

	<button type="submit">Enviar</button>
</form>


<?php
    
/**
   Faça uma página web que leia um número
   e exiba o dia corrrespondete da semana
 */



if(@$_REQUEST["week_start"] == 1){

    switch (@$_REQUEST["week"]) {

        case '1': print "Domingo"; break;
        case '2': print "Segunda-feira"; break;
        case '3': print "Terça-feira"; break;
        case '4': print "Quarta-feira"; break;
        case '5': print "Quinta-feira"; break;
        case '6': print "Sexta-feira"; break;
        case '7': print "Sábado"; break;
        
        default:
            print "Nenhum número digitado";
    }
}elseif(@$_REQUEST["week_start"] == 2){

    switch (@$_REQUEST["week"]) {

        case '1': print "Segunda-feira"; break;
        case '2': print "Terça-feira"; break;
        case '3': print "Quarta-feira"; break;
        case '4': print "Quinta-feira"; break;
        case '5': print "Sexta-feira"; break;
        case '6': print "Sábado"; break;
        case '7': print "Domingo"; break;
        
        default:
            print "Nenhum número digitado";
    }
}else{
    print "Dia de início da semana inválido";
}
?>
