require 'digest'

md5 = ''
for i in ARGV[0].to_i..ARGV[1].to_i
	s = Digest::MD5.hexdigest i.to_s
	md5 << s << "\n"
end

fp = File.new(ARGV[2],'w')
fp.write(md5)
fp.close
