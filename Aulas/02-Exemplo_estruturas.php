<?php
	//	for($a = 1; $a <= 10; $a++)  {
	$a=1;
		while($a<=10){
			if($a == 3) {
					$a++;
					continue;	}
				if($a == 8){break;}
				
		$cubo = $a * $a * $a;
        echo "O cubo de $a é $cubo<br />";
        $a++;
		}
 ?>