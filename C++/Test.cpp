#include <iostream>
#include <cmath>
#include <cstdlib>
#include <ctime>

using namespace std;

int main()
{
    srand(time(0));
    int number1 = (rand() % (6 - 1 + 1)) + 1;
    int number2 = (rand() % (6 - 1 + 1)) + 1;
    cout << number1 << " " << number2;

    return 0;
}