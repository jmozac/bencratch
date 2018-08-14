#!/usr/bin/ruby

def battle1(n)
	puts n
	(0..100000000).each do |i|
		x=i*4/2+2-1
	end
	if n<3
		battle1(n+1)
	end
end
a = Time.now.to_i
puts "Start at #{a}"
battle1(0)
b = Time.now.to_i
puts "Finish at #{b}"
c = b-a
puts "Total time : #{c} seconds"
