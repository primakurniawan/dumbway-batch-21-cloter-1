function hitungKredit(pilihRumah, lamaKredit) {
  let tipeRumah;
  let hargaRumah;
  let uangMuka;
  let sisa;
  let angsuran;

  switch (pilihRumah) {
    case 1:
      tipeRumah = "Rose";
      hargaRumah = 120000000;

      break;
    case 2:
      tipeRumah = "Gold";
      hargaRumah = 300000000;

      break;
    case 3:
      tipeRumah = "Platinum";
      hargaRumah = 360000000;
  }
  uangMuka = 0.2 * hargaRumah;
  sisa = hargaRumah - uangMuka;
  angsuran = sisa / lamaKredit;
  console.log(`Type Rumah: ${tipeRumah}\n
Harga Rumah: ${hargaRumah}\n
Uang Muka: ${uangMuka}\n
Sisa: ${sisa}\n
Lama Kredit: ${lamaKredit}\n
Angsuran: ${angsuran}\n
`);
  let arr = [];
  for (let i = 1; i <= lamaKredit; i++) {
    arr.push({
      bulanKe: i,
      angsuran: angsuran,
      sisa: sisa - angsuran * i,
    });
  }

  console.table(arr);
}

hitungKredit(1, 24);
