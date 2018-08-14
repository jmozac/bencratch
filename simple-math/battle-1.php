<?php
	function battle1($n){
		echo $n;
		for($i=0;$i<100000000;$i++){
			$x=$i*4/2+2-1;
		}
		if($n<3){
			battle1($n+1);
		}
	}
	$a=time();
	echo "Start at ".$a."\n";
	
		battle1(0);
	
	$b=time();
	echo "Finish at ".$b."\n";
	$c=$b-$a;
	echo "Total time = ".$c." second\n";
