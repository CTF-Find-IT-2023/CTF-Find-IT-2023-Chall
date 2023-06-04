#include<iostream>
#include<string>
#include<vector>

using namespace std;

string flag = "[REDACTED]";
#define KEY [REDACTED]

string encrypt(string text, int key)
{
    char a[key][(text.length())];
 
    for (int i=0; i < key; i++)
        for (int j = 0; j < text.length(); j++)
            a[i][j] = '\n';
 
    bool dir_down = false;
    int x = 0, y = 0;
 
    for (int i=0; i < text.length(); i++)
    {
        if (x == 0 || x == key-1)
            dir_down = !dir_down;
 
        a[x][y++] = text[i];
 
        dir_down?x++ : x--;
    }
 
    string result;
    for (int i=0; i < key; i++)
        for (int j=0; j < text.length(); j++)
            if (a[i][j]!='\n')
                result.push_back(a[i][j]);
 
    return result;
}
 
int main()
{
    string text = flag;
    int key = KEY;
    string cipher = encrypt(text, key);
    cout << cipher << endl;
    return 0;
}