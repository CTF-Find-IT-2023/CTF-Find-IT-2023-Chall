#include<iostream>
#include<fstream>
#include<string>

using namespace std;

void printMenu()
{
    cout << "1. Check your mental health" << endl;
    cout << "2. Real men don't check mental health" << endl;
    cout << "Enter your choice: ";
}

void question()
{
    cout << "How are you feeling today?" << endl;
    cout << "1. Happy" << endl;
    cout << "2. Sad" << endl;
    cout << "3. Angry" << endl;
    cout << "4. Stressed" << endl;
    cout << "5. Anxious" << endl;
    cout << "6. Tired" << endl;
    cout << "7. Lonely" << endl;
    cout << "8. Bored" << endl;
    cout << "9. Excited" << endl;
    cout << "10. Confused" << endl;
    cout << "11. Scared" << endl;
    cout << "12. Nervous" << endl;
    cout << "13. Frustrated" << endl;
    cout << "14. Depressed" << endl;
    cout << "15. Guilty" << endl;
    cout << "16. Jealous" << endl;
    cout << "17. Insecure" << endl;
    cout << "18. Hopeless" << endl;
    cout << "19. Worthless" << endl;
    cout << "20. Other" << endl;
    cout << "Enter your choice: ";
}

int main()
{
    bool happy = false;
    string flag = "FindITCTF{everyone_asks_who_are_you_but_not_how_are_you}";

    cout << "Welcome to the mental health check!" << endl;
    cout << "This program will check your mental health before you compete in the CTF." << endl;
    cout << "If you are feeling down, please seek help." << endl;

    while(!happy)
    {
        printMenu();
        int choice;
        cin >> choice;
        cout << endl;

        if(choice == 1)
        {
            question();
            int choice2;
            cin >> choice2;
            cout << endl;
            if(choice2 == 1)
            {
                happy = true;
                cout << "Happy happy happy!" << endl;
                cout << "Here is your flag: " << flag << endl;
                cout << "Keep enjoying life!\n" << endl;
            }
            else
            {
                cout << "Get some help first, Sir. You mean a lot to other people. Stay safe and keep enjoying life." << endl;
                cout << "Look at some cute cats first then return here." << endl;
                cout << "Goodbye!\n" << endl;
            }
            system("pause");
            return 0;
        }
        else
        {
            cout << "Chill, Andrew Tate. Goodbye!\n" << endl;
            system("pause");
            return 0;
        }
    }

    return 0;

}