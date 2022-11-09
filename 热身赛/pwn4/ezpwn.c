#include <string.h>
#include <stdio.h>
#include <stdlib.h>

int init(){
  setvbuf(stdin, 0LL, 2, 0LL);
  setvbuf(stdout, 0LL, 2, 0LL);
  setvbuf(stderr, 0LL, 2, 0LL);
}

int main(){
	init();

	char str[8];

	printf("Please input a*8:");
	gets(str);

	if(strlen(str)<=8)
		printf("You are good boy.\n");
	else{
		printf("You are bad boy.\n");
		system("cat flag");
	}

	return 0;
}
