#include<stdio.h>
char name[0x30];
int key;
int main()
{
    setbuf(stdin,0);
    setbuf(stderr,0);
    setbuf(stdout,0);
    puts("\33[6;35mWelcome to the world of fmtstr\33[0m");
    puts("");
    int fd=open("flag",0);
    if(fd==-1){
       perror("Open failed.");
    }
    read(fd,name,0x30);
    size_t *pointer=&name;
    char buf[0x100];
    puts("\33[3;33mInput your format string.\33[0m");
    read(0,buf,0x100);
    puts("Ok.");
    printf(buf);
}
