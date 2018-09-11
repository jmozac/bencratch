#!/usr/bin/php -q
<?php
	$hash = md5($argv[1]);
	$found = false;
	$a = time();
	for($i=1;$i<3;$i++){
		if($found){
			$b = time();
			$c = $b-$a;
			echo "Finish at ".$c."\n";
			break;
		}
		echo "Open hash-".$i.".txt\n";
		$fp = fopen('hash-'.$i.'.txt','r');
		if($fp){
			while(($line = fgets($fp)) !== false){
				if($hash == str_replace("\n",'',$line)){
					$found = true;
					echo $hash." Found.\n";
					$b = time();
					$c = $b-$a;
					echo "Finish at ".$c."\n";
					break;
				}
			}
		}
	}
