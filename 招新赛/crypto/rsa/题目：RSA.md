## 题目：RSA

#### 一种很热门的加密方式叫rsa，你知道吗，不妨试试怎么攻破它吧

根据源代码：flag分为五段

1.已知p,q,c,e常规解法得m

2.dp泄露攻击算法

3.低指数e的攻击

4.指数(e很大时)攻击

5.直接n的多因素攻击，或者借助hint求解p再计算m，脚本如下

```python
from Crypto.Util.number import *
import gmpy2
c = 
hint = 
n = 
e = 0x10001
p=gmpy2.gcd(hint*e**e-1,n)
q=n//(p*p)
d = inverse(e, p * (p-1) * (q-1))
m=pow(c,d,n)
print(long_to_bytes(m))

#flag{W4_ar3_re4L1y_G0od_4t_m4th_4nD_rsa!}
```

