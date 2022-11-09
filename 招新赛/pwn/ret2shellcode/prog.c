#include <sys/mman.h>
#include <stdio.h>
#include <stdlib.h>

void banner(){
	printf("\33[40;31m              _ \33[40;32m                \33[40;33m            _        \33[0m\n");
	printf("\33[40;31m__      _____| \33[40;32m| ___ ___  _ __ \33[40;33m___   ___  | |__ ___  \33[0m\n");
	printf("\33[40;31m\\ \\ /\\ / / _ \\\33[40;32m |/ __/ _ \\| '_ \33[40;33m` _ \\/ __ \\ | __/ _ \\ \33[0m\n");
	printf("\33[40;31m \\ V  V /  __\33[40;32m/ | (_| (_) | | \33[40;33m| | | |  __/ | || (_) |\33[0m\n");
	printf("\33[40;31m  \\_/\\_/ \\__\33[40;32m_|_|\\___\\___/|_|\33[40;33m |_| |_|\\___|  \\__\\___/ \33[0m\n");
	printf("\33[40;31m           \33[40;32m                \33[40;33m                         \33[0m\n");
	printf("\33[40;31m          \33[40;32m      _         \33[40;33m              \33[0m\n");
	printf("\33[40;31m  ___ ___\33[40;32m__   _| |_ ___  \33[40;33m__ _ _ __ ___  \33[0m\n");
	printf("\33[40;31m / __/ _\33[40;32m \\ \\ / / __/ _ \\\33[40;33m/ _` | '_ ` _ \\ \33[0m\n");
	printf("\33[40;31m| (_| (\33[40;32m_) \\ V /| ||  __\33[40;33m/ (_| | | | | | |\33[0m\n");
	printf("\33[40;31m \\___\\\33[40;32m___/ \\_/  \\__\\__\33[40;33m_|\\__,_|_| |_| |_|\33[0m\n");
}

char* buf;

int main(){
	setvbuf(stdout, 0, 2, 0);
	banner();

	char str[8];
	buf=malloc(0x100);

	printf("I have a gift for you.\nWhat do you want?\n");
	read(0,buf,0x100);

	printf("Okay, it's yours: %p.\ntake it.\n",buf);
	gets(str);

	if(mprotect((char*)((int)buf&(~0xfff)),0x1000,PROT_EXEC))
		fprintf(2,"mprotect\r");

	return 0;
}
