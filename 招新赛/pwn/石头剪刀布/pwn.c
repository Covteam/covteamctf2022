#include<stdio.h>
#include<stdlib.h>
#include <unistd.h>


static void rules(){
    printf("\33[1;36m*************************\33[0m\n");
    printf("\33[1;36m********* rules *********\33[0m\n");
    printf("\33[1;36m*************************\33[0m\n");
    printf("\33[1;36m******* 0. rock  ********\33[0m\n");
    printf("\33[1;36m******* 1. scissor ******\33[0m\n");
    printf("\33[1;36m******* 2. paper ********\33[0m\n");
    printf("\33[1;36m*************************\33[0m\n");
    printf("\33[6;34mYou just win me five times\33[0m\n");
}

static int check(int num){
    if(num >= 3|| num < 0){
        printf("are you kind me?\n");
        exit(0);
    }
    else
        return num;
}


static int input(){
    unsigned int num;
    scanf("%d",&num);
    return check(num);
}

static void gameover(){
    printf("\33[6;31mDon\'t give up , try again\33[0m\n");
    exit(0);
}

static void backdoor(){
    printf("\33[6;34myarh,you are so good\33[0m\n");
    system("/bin/sh");
}
    
static void playgame(){
    rules();
    for (int i = 1; i<= 5; i++){
        printf("\33[1;31mround[%d]\33[0m\n",i);
        int num = input();
        int guess_num = rand()%3;
        if ((num == 0 && guess_num != 1)||(num == 1 && guess_num != 2)||(num == 2 && guess_num != 0))
            gameover();
        else
            printf("success!!!\n");
    }
    backdoor();
}
int main(int argc, char *argv[])
{
    setvbuf(stdin,0,2,0);
    setvbuf(stdout,0,2,0);
    setvbuf(stderr,0,2,0);
    srand(10);
    char choose;
    printf("Do you know \33[1;36m\"rand()\"\33[0m ?\n");
    printf("In order to help you,I can tell you a secert!!!But you need to answer my question\n");
    printf("Will you learn about something of pwn later?(y/n)\n");
    scanf("%c",&choose);
    if(choose == 'y'){
        printf("good boy,I trust you\n");
        printf("the secert is:\n");
        printf("I have set a seed for \33[1;36m\"srand()\"?(10)\33[0m\n");
    }
    else{
        printf("lazy dog,you can\'t know my secret and get out!!!\n");
        exit(0);
    }
    printf("I\'m so happy.Come and play games with me\n");
    playgame();
    return 0;
}
