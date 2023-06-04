#include <stdio.h>
#include <string.h>

char key[] = "@ch^CN=N@um*f+^Y/*F+^Y/If+>w";

void encodeKey() {
    for(int i = 0; i<strlen(key); i++) {
        key[i] = key[i] + 0x6;
    }
}

int main(int argc, char **argv) {
    encodeKey();
    printf("%s\n", key);

    return 0;
}