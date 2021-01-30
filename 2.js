function hitungHurufDariKalimat(huruf, kalimat) {
  let total = 0;
  if (huruf.length == 1) {
    const arrHuruf = kalimat.split("");
    arrHuruf.forEach((e) => {
      if (e == huruf) total++;
    });
    console.log(`Hasil hitung huruf "${huruf}" muncul sebanyak ${total} kali`);
  } else {
    console.log("huruf tidak valid");
  }
}

hitungHurufDariKalimat(
  "a",
  "saya mau makan sate bersama teman saya setelah lulus dari sekolah dasar"
);
