#include<stdio.h>
#include<stdlib.h>


void init(){
    setvbuf(stdin,0,2,0);
    setvbuf(stdout,0,2,0);
    setvbuf(stderr,0,2,0);
}

void banner(){
    printf("\33[40;31m              _ \33[40;32m                \33[40;33m            _        \33[0m\n");
    printf("\33[40;31m__      _____| \33[40;32m| ___ ___  _  \33[40;33m___   ___  | | ___  \33[0m\n");
    printf("\33[40;31m\\ \\ /\\ / / _ \\\33[40;32m |/ / _ \\| '_ \33[40;33m` _ \\/  \\ | / _ \\ \33[0m\n");
    printf("\33[40;31m \\ V  V /  __\33[40;32m/ | (_| (_) | | \33[40;33m| | | |  / |  (_) |\33[0m\n");
    printf("\33[40;31m  \\_/\\_/ \\__\33[40;32m_|_|\\___\\___/|_|\33[40;33m |_| |_|\\___|  \\__\\___/ \33[0m\n");
    printf("\33[40;31m           \33[40;32m                \33[40;33m                         \33[0m\n");
    printf("\33[40;31m          \33[40;32m      _         \33[40;33m              \33[0m\n");
    printf("\33[40;31m  ___ ___\33[40;32m__   _| |_ ___  \33[40;33m__ _ _ __ ___  \33[0m\n");
    printf("\33[40;31m / __/ _\33[40;32m \\ \\ / / __/ _ \\\33[40;33m/ _` | '_ ` _ \\ \33[0m\n");
    printf("\33[40;31m| (_| (\33[40;32m_) \\ V /|   __\33[40;33m/ (_| | | | | | |\33[0m\n");
    printf("\33[40;31m \\___\\\33[40;32m___/ \\_/  \\__\\__\33[40;33m_|\\__,_|_| |_| |_|\33[0m\n\n");
}

long int key = 0;

int main(int argc, char *argv[])
{
    init();
    banner();
    printf("\033[1;36mDO YOU KNOW INTERGER OVERFLOW\033[0m\n");
    printf("\033[5;34mTRY IT!!!\033[0m\n");
    scanf("%ld",&key);
    printf("\n");
    if (key > 0){
        int num = key;
        if(num < 0){
            printf("\033[1;31mCONGRATULATIONS!!!\033[0m\n");
            system("cat flag");
        }
        else{
            printf("\033[1;31mGG\033[0m\n");
        }
    }
    return 0;
}
