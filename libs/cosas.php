<?php
echo "cosas";
$cosas = "Algunas cosas";
$otra=23;
echo $otra."-".$cosas."\n";
if ($otra<0){
	echo "<br> es mayor que cero";

}else{
	echo"es menor que cero";
}
for($i=0; $i<5; $i++){
	echo $i."<br>";
}

function pagina1 (){
	echo "soy la pagina 1";
}
function pagina2 (){
	echo "soy la pagina 2";
}
function menu(){
	$menu=[];
	$menu[0]["codigo"]=1;
	$menu[0]["nombre"]="Empresa";
	$menu[1]["codigo"]=2;
	$menu[1]["nombre"]="Contactos";

	for ($i=0; $i<count($menu); $i++){
		echo"<li> <a href = "'index.php?="."$menu[$i]["codigo"]"'.."</li>"
	}

}

?>
