function cetakPola(n) {
let str = '';
let i,
j,
k = 0;

for (i = 1; i <= n; i++) {
for (l = 1; l <= n; l++) {
for (j = 1; j <= n - i; j++) {
str = str.concat(' ');
}

while (k != 2 * i - 1) {
if (k == 0 || k == 2 * i - 2) str = str.concat('*');
else str = str.concat(' ');
k++;
}

for (j = 1; j <= n - i + 1; j++) {
str = str.concat(' ');
}

k = 0;
}

str = str.concat('\n');
}
n--;

for (i = n; i >= 1; i--) {
for (l = 1; l <= n + 1; l++) {
for (j = 0; j <= n - i; j++) {
str = str.concat(' ');
}

k = 0;
while (k != 2 * i - 1) {
if (k == 0 || k == 2 * i - 2) str = str.concat('*');
else str = str.concat(' ');
k++;
}

for (j = 0; j <= n - i + 1; j++) {
str = str.concat(' ');
}
}
str = str.concat('\n');
}
console.log(str);
}

cetakPola(5);