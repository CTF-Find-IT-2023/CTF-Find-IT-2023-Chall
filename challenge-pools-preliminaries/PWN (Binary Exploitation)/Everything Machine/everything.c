#include <stdlib.h>
#include <stdio.h>
#include <string.h>

int login() {
	int credits = 0x10;
	char username[16];
	printf("Item: ");
	gets(username);

	 if (!strcmp(username, "flag")){
                credits = 0x15;
       } else if (!strcmp(username, "trials")){
                credits  = 0x20;
	}

	return credits;
}

int main(int argc, char **argv){
	setbuf(stdout, NULL);
	 printf("Step forward for synchronization\n");
	 printf("Please enter an item name to be printed\n");

	int access = login();
	 printf("Your credits: 0x%08x\n", access);

	if (access <= 0x3030) {
	 printf("Insufficient credits (needs 3030). You do not have access to that item.\n");
	 printf("Please exit the platform.\n");
	} else if (access > 0x3030) {
	system("/bin/sh ./flag.txt");
	}
} 
