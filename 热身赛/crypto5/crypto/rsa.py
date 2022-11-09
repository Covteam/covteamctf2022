from Crypto.Util.number import getPrime,bytes_to_long
flag = b"***...***"
p = getPrime(1024)
q = getPrime(1024)
e = 0x10001
n = p*q
m = bytes_to_long(flag)
c = pow(m,e,n)
print(p)
print(q)
print(c)