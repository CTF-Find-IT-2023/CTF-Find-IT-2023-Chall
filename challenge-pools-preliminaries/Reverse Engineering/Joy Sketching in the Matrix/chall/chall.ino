#include <MD_MAX72xx.h>
#define MD_MAX7219 MD_MAX72xx

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

  pinMode(VERT_PIN, INPUT);
  pinMode(HORZ_PIN, INPUT);
  pinMode(SEL_PIN, INPUT_PULLUP);
}

void loop() {
  int horz = analogRead(HORZ_PIN);
  int vert = analogRead(VERT_PIN);
  if (vert < 300) {
    y = min(y + 1, maxY);
  }
  if (vert > 700) {
    y = max(y - 1, 0);
  }
  if (horz > 700) {
    x = min(x + 1, maxX);
  }
  if (horz < 300) {
    x = max(x - 1, 0);
  }
  if (digitalRead(SEL_PIN) == LOW) {
    mx.clear();
  }
  mx.setPoint(y, x, true);
  mx.update();
  delay(100);
}

// Note: To Joy, don't give up trying to find out about the easter egg! -Neo
// {
//   "type": "wokwi-max7219-matrix",
//   "id": "matrix1",
//   "top": -3.64,
//   "left": 112.41,
//   "rotate": 180,
//   "attrs": { "chain": "2" }
// }