#!/usr/bin/python

import time

def battle1(n):
	print(n)
	for i in range(0,100000000):
		x=i*4/2+2-1
	if n<3:
		battle1(n+1)
		
a = int(time.time())
print("Start at "+str(a))
battle1(0)
b = int(time.time())
print("Finish at "+str(b))
c = b-a
print("Total time : "+str(c)+" seconds")
