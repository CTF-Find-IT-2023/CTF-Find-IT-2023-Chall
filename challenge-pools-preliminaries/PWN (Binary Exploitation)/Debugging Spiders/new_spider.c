#include <stdlib.h>
#include <unistd.h>
#include <stdio.h>
#include <string.h>

void secret_spider()
{
 printf("Why the silly face when the room so serious?\n");
 system("cat flag.txt");
}

int main(int argc, char **argv)
{
 volatile int (*fp)();
 char buffer[64];

 fp = 0;
 gets(buffer);

 if(fp) {
  printf("calling function pointer, jumping to 0x%08x\n", fp);
  fp();
 }
}
