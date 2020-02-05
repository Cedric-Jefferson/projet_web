<html>
  <head>
    <title>Afficher le tableau multiplication</title>
    <link type="text/css" href="exo2.css" rel="stylesheet" />
  </head>
</html>
<?php

function cl($i){
  $w="background-color:white";
  $b="background-color:blue";
  $bl="color:black";
  $o="color:orange";

  if($i%2==0){
    return $w;
  }else{
	  return $b;
	}
}

echo"<h2> Tableau  de multiplication de 3</h2>";
echo"<table  class='tableStyle'>";

for($j=0;$j<=10;$j++){
	$p=$j*3;
  $c=cl($j);
  echo"<tr style = '$c;'>";
  if($c=="background-color:white"){
    echo"<td style='color:black'>3*$j</td>";
    echo"<td style='color:black'>$p</td>";
  }else{
    echo"<td style='color:orange'>3*$j</td>";
    echo"<td style='color:orange'>$p</td>";
  }
  echo"</tr>";
} 
   	
echo"</table>"; 


?>

