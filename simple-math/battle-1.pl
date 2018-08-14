#!/usr/bin/perl

sub battle1 {
	my($n) = @_;
	print $n;
	for($i=0;$i<100000000;$i++){
		$x=$i*4/2+2-1;
	}
	if($n<3){
		battle1($n+1);
	}
}
$a=time();
print "Start at ".$a."\n";

battle1(0);

$b=time();
print "Finish at ".$b."\n";
$c=$b-$a;
print "Total time = ".$c." second\n";
