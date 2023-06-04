#include <MD_MAX72xx.h>

#define	MAX_DEVICES	2

const int maxX = MAX_DEVICES * 8 - 1;
const int maxY = 7;

#define	CLK_PIN		13
#define	DATA_PIN	11
#define	CS_PIN		10

#define VERT_PIN A0
#define HORZ_PIN A1
#define SEL_PIN  2

MD_MAX72XX mx = MD_MAX72XX(MD_MAX72XX::PAROLA_HW, CS_PIN, MAX_DEVICES);

int x = 0;
int y = 0;

void setup() {
  mx.begin();
  mx.control(MD_MAX72XX::INTENSITY, MAX_INTENSITY / 2);
  mx.clear();

  Serial.begin(9600);
  Serial.println("Ready");

  pinMode(VERT_PIN, INPUT);
  pinMode(HORZ_PIN, INPUT);
  pinMode(SEL_PIN, INPUT_PULLUP);
}

void loop() {
  if(Serial.available() > 0)
  {
    char c = Serial.read();
    if(c == 'u' || c == 'U')
    {
      y = min(y + 1, maxY);
      Serial.print("u");
    }
    else if(c == 'd' || c == 'D')
    {
      y = max(y - 1, 0);
      Serial.print("d");
    }
    else if(c == 'r' || c == 'R')
    {
      x = min(x + 1, maxX);
      Serial.print("r");
    }
    else if(c == 'l' || c == 'L')
    {
      x = max(x - 1, 0);
      Serial.print("l");
    }
    else if(c == 'c' || c == 'C')
    {
      mx.clear();
      y = 0;
      x = 0;
      Serial.println("\nCLEAR");
    }
  }
  mx.setPoint(y, x, true);
  mx.update();
}
