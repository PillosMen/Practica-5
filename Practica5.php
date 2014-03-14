<html>
<body>
<?php 
$aumento=1;

echo"<table border=1>";

  for($i=1; $i<=10; $i++){	 
  
    $color="#954732";
    
    if($i%2==0){
	$color="#119540";
    } 
      echo"<tr style=background-color:".$color.">";
	for($l=1; $l<=10; $l++){
	  echo "<td>".$aumento."</td>";
	    $aumento++;
	}
      echo"</tr>";
  }
echo"</table>" ?>; 
</body>
</html>