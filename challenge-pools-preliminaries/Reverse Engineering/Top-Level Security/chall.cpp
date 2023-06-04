// A program that asks for a password and checks if it is correct.
// The program is protected with a simple anti-debugging technique.
// The program is also protected with a simple anti-reversing technique.

#include <iostream>
#include <string>
#include <math.h>
// #include <Windows.h>
#include <vector>
#define FLAG "FindITCTF{T0P_L3v3L_S3cUr1Ty_1s_3a5y}"

using namespace std;

#include <iostream>
#include <vector>

using namespace std;

int main()
{
    // string plaintext = "Change the 'T0P' string to 'L0W' string to get the flag!";
    string input;
    string redHerring[5] =  {
                            "FindITCTF{wh4t5_wr0N6_w1tH_RE}",
                            "FindITCTF{1S_Th1S_4_R3aL_Fl4G}",
                            "FindITCTF{1_Th1nK_1_4M_4_R3aL_Fl4G}",
                            "FindITCTF{R3V_is_3a5y_isnT_1t}",
                            "FindITCTF{D0nT_7rY_70_R3V_7h1S}"
                            };
    
    // // Anti-debugging technique
    // if (IsDebuggerPresent())
    // {
    //     cout << "You are not allowed to debug this program!" << endl;
    //     return 0;
    // }

    // // Anti-reversing technique
    // if (GetTickCount() < 10000)
    // {
    //     cout << "You are not allowed to reverse this program!" << endl;
    //     return 0;
    // }

    // Change the 'T0P' string to 'L0W' string to get the flag!
    string password = "*OHUNL [OL l;u7l Z[YPUN [V l3u>l Z[YPUN [V NL[ [OL MSHNf"; //ROT47 (69)
    
    cout << "Welcome to the Top-Level Security program!" << endl;
    cout << "Enter the password: ";
    // input until newline
    getline(cin, input);

    if (input == password)
    {
        cout << "Correct password!" << endl;
        cout << FLAG << endl;
    }
    else
    {
        cout << "Probable password!" << endl;
        cout << redHerring[rand() % 5] << endl;
    }

    string blueHerring[5] = {
                            "FindITCTF{T0_Th3_4n5w3r_0f_L1f3_15_42}",
                            "FindITCTF{CyB3RS3CuR1Ty_1s_3a5y}",
                            "FindITCTF{T0P_N0tCh_S3CuR1Ty_i5_N0ThIn6}",
                            "FindITCTF{R3veRs3_th3_rUl3s}",
                            "FindITCTF{B4Nk1n6_1s_3a5y_1snT_1t}"
                            };

    return 0;
}