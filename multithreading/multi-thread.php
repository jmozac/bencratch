#!/usr/bin/php -q
<?php
	define('mypid',getmypid());
	class FindHash extends Thread {
		private $infile;
		private $findme;
		public function __construct($idx,$findme){
			$this->infile = $idx;
			$this->findme = $findme;
		}
		public function run(){
			$hash = md5($this->findme);
			echo "Open hash-".$this->infile.".txt\n";
			$fp = fopen('hash-'.$this->infile.'.txt','r');
			if($fp){
				while(($line = fgets($fp)) !== false){
					if($hash == str_replace("\n",'',$line)){
						echo $hash." Found.\n";
						$b = time();
						$c = $b-timestart;
						echo "Finish at ".$c."\n";
						shell_exec('kill -9 '.mypid);
					}
				}
			}
		}
	}

	$subprocess = [];
	// Initialize and start the threads
	define('timestart',time());
	for($i=1;$i<3;$i++){
		$subprocess[$i] = new FindHash($i,$argv[1]);
		$subprocess[$i]->start();
	}

