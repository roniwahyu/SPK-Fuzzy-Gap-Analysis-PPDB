<?php 

$gabung = "" ;
for($i=1;$i<=7;$i++){
if($i > 1){
$gabung = $gabung. "+". $i;
}else{
$gabung = $gabung. $i;
}
}

echo $gabung;
 ?>