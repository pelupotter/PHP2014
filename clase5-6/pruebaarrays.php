<?php
$a1=array("b"=>"green","a"=>"red","z"=>"red", "c"=>"blue","g"=>"blue", "d"=>"yellow", "f"=>"yellow");
$a2=array("e"=>"red","z"=>"red","f"=>"green","r"=>"green","g"=>"blue","l"=>"brown");

print_r($a1);
echo "</br/>";

print_r($a2);

echo "</br/>";

$result=array_diff($a1,$a2);
$result=array_unique($a1);
print_r($result);
echo "</br/>";
print_r(array_unique(array(1,"1")));
echo "</br/>";

print_r(array_values($a1));
echo "</br/>";
print_r(array_keys($a1));
echo "</br/>";

function potencia($i){
	return $i*$i;
}

$valores = array(1,2,3,4,5);

print_r(array_map("potencia",$valores));

if(array_key_exists("ee", $a1)){
	echo "la clave e esta en a1";
}

echo "</br/>";


$indice = array_search("yellow", $a1);
if ($indice){
	echo $a1[$indice];
}

print_r(array_flip(array_flip($a1)));
echo "</br/>";
print_r(array_diff($a1, array_unique($a1)));

echo "</br/>";

print_r(array_intersect($a1, $a2));
echo "</br/>";
print_r(array_intersect_assoc($a1, $a2));

$a = array(1,2,3,4,5);
$b = array('a','b','c','d','f');
$c = array('A','B','C','D','F');


echo "</br/>";
echo json_encode(array_map(null,$a,$b,$c));


print_r(explode(",", "alberto,12345,masculino,22021887"));
echo "</br/>";

$datos = array('alberto','masculino','Montevideo');

$query = "INSERT INTO usuarios VALUES (";
$query .= implode(",", $datos);
$query .= ")";

echo $query;
echo "</br/>";


?>