#!/usr/bin/php -q

<?php
	function looping($x,$y){
		//print $x."\n";
		$x++;
		if($x <= $y){
			looping($x,$y);
		}
	}
	$a=time();
	echo "Looping TANPA fungsi loop\n";
	looping($argv[1],$argv[2]);
	$b=time();
	$c=$b-$a;
	
	echo "Selesai dalam waktu ".$c." detik\n\n";


	function loopfor($x,$y){
		for($i=$x;$i<=$y;$i++){
			#echo $i."\n";
		}
	}
	
	echo "\nLooping DENGAN fungsi loop\n";
	$d=time();
	loopfor($argv[1],$argv[2]);
	$e=time();
	$f=$e-$d;
	echo "Selesai dalam waktu ".$f." detik\n\n";
