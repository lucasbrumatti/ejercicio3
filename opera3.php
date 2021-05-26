<html>
<body>

<?php
 
$minutos= $_POST["minutos"];
$dia= $_POST["dia"];
$turno= $_POST["turno"];
$total=0;
$impuesto=0;
$total1=1;
$total2=50;
$total3=20;
$total4=10;

if($minutos<=5)
{
  $total=$total1;
}else if($minutos>5 && $minutos<=8)
{
  $total=$total1+$total2;
}else if($minutos>8 && $minutos<=10)
{
  $total=$total1+$total2+$total3;
}else if($minutos>10)
{
  $total=$total1+$total2+$total3+$total4;
}

if($dia == "Domingo"){
  $impuesto=$total*0.03;
  $total=$total+$impuesto;  
  echo "La llamada le costó $", $total;
}else if($turno =="Mañana"){
  $impuesto=$total*0.15;
  $total=$total+$impuesto;  
  echo "La llamada le costó $", $total;
}else{
  $impuesto=$total*0.10;
  $total=$total+$impuesto;  
  echo "La llamada le costó $", $total;
}

?>
    
</body>
</html>
