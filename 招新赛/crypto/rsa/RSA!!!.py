from Crypto.Util.number import *
from secret import flag

assert len(flag) % 5 == 0
cnt = len(flag) // 5
flags = [flag[cnt*i:cnt*(i+1)] for i in range(5)]

# Try to implement your RSA with primes p and q
def level1(message):
    m = bytes_to_long(message)
    p = getPrime(512)
    q = getPrime(512)
    n = p * q
    e = 0x10001
    assert m < n
    c = pow(m, e, n)
    print(f'c = {c}')
    print(f'p = {p}')
    print(f'q = {q}')

# But how can we attack the RSA when we know the 'dq'?
def level2(message):
    m = bytes_to_long(message)
    p = getPrime(512)
    q = getPrime(512)
    n = p * q
    e = 0x10001
    d = inverse(e, (p-1) * (q-1))
    dq= d*q
    assert m < n
    c = pow(m, e, n)
    print(f'c = {c}')
    print(f'n = {n}')
    print(f'dq = {dq}')
    
# Different e may cause danger?
def level3(message):
    m = bytes_to_long(message)
    p = getPrime(512)
    q = getPrime(512)
    e = 5
    n = p * q
    assert m < n
    c = pow(m, e, n)
    print(f'c = {c}')
    print(f'n = {n}')

# So is there anything wrong with RSA as shown below?
def level4(message):
    m = bytes_to_long(message)
    p = getPrime(512)
    q = getPrime(512)
    d = getPrime(64)
    e = inverse(d, (p-1) * (q-1))
    n = p * q
    assert m < n
    c = pow(m, e, n)
    print(f'c = {c}')
    print(f'e = {e}')
    print(f'n = {n}')

# What about different n? Just have a try with the hint!
def level5(message):
    m = bytes_to_long(message)
    p = getPrime(512)
    q = getPrime(512)
    n = p * p * q
    e = 0x10001
    d = inverse(e, p * (p-1) * (q-1))
    assert m < n
    c = pow(m, e, n)
    hint = pow(d, e, n)
    print(f'c = {c}')
    print(f'hint = {hint}')
    print(f'n = {n}')

print('Level 1:')
level1(flags[0])
print('Level 2:')
level2(flags[1])
print('Level 3:')
level3(flags[2])
print('Level 4:')
level4(flags[3])
print('Level 5:')
level5(flags[4])
