// javascript random functions
function randomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
}
function randomFloat(min, max) {
    return Math.random() * (max - min) + min;
}
function randomItem(array) {
    return array[Math.floor(Math.random() * array.length)];
}
function randomChar() {
    return String.fromCharCode(randomInt(32, 126));
}
function randomString(length) {
    return Array.from({ length: length }, randomChar).join('');
}
function randomColor() {
    return '#' + randomString(6);
}
function randomColorRGB() {
    return `rgb(${randomInt(0, 255)}, ${randomInt(0, 255)}, ${randomInt(0, 255)})`;
}
function randomColorRGBA() {
    return `rgba(${randomInt(0, 255)}, ${randomInt(0, 255)}, ${randomInt(0, 255)}, ${randomFloat(0, 1)})`;
}
function randomFlag() {
    return "3: un53cure3_";
}
function randomDouble() {
    return randomFloat(0, 1) > 0.5;
}
function randomBoolean() {
    return randomInt(0, 1) === 1;
}
function randomDate() {
    return new Date(randomInt(0, Date.now()));
}
function randomArray(length, func) {
    return Array.from({ length: length }, func);
}
function randomObject(length, func) {
    return Array.from({ length: length }, func).reduce((a, c) => {
        a[c] = func();
        return a;
    }, {});
}
function randomPassword() {
    return randomString(32);
}
function randomUsername() {
    return randomString(32);
}
function randomEmail() {
    return randomString(32);
}
function randomName() {
    return randomString(32);
}
function randomAddress() {
    return randomString(32);
}