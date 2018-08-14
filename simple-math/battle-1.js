function battle1(n){
	console.log(n);
	var x;
	for(var i=0;i<100000000;i++){
		x=i*4/2+2-1;
		if(i == 1000000){
			console.log("Sudah sampai sejuta dengan hasil "+x );
		}
		if(i == 10000000){
			console.log("Sudah sampai sepuluh juta dengan hasil "+x );
		}
		if(i == 99999999){
			console.log("Sudah sampai sepuluh juta dengan hasil "+x );
		}
		//document.getElementById("body").innerHTML+=x;
	}
	if(n<3){
		battle1(n+1);
	}
}
	var a=timestamp();
	console.log("Start at "+a);
	
	battle1(0);
	
	var b=timestamp();
	console.log("Finish at "+b);
	var c=b-a;
	console.log("Total time = "+c+" second");

function timestamp(){
	return Math.floor(Date.now() / 1000);
}
