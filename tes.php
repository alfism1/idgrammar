<?php
$string = 'memakan saya apel';
$pattern = '/(?:memakan) (saya) (apel)/i';
$replacement = '$2 $1';
echo preg_replace($pattern, $replacement, $string);




// include 'koneksi.php';
//
// $cek = "aktif-aktip
// aktivitas-aktifitas
// al Quran-alquran
// analisis-analisa
// Anda-anda
// apotek-apotik
// asas-azas
// atlet-atlit
// bus-bis
// besok-esok
// diagnosis-diagnosa
// ekstrem-ekstrim
// embus-hembus
// Februari-Pebruari
// frekuensi-frekwensi
// foto-Photo
// gladi-geladi
// hierarki-hirarki
// Ibukota-ibu kota
// ijazah-ijasah
// imbau-himbau
// indera-indra
// indragiri-inderagiri
// istri-isteri
// izin-ijin
// jadwal-jadual
// jenderal-jendral
// Jumat-Jum’at
// kanker-kangker
// karier-karir
// Katolik-Katholik
// kendaraan-kenderaan
// komoditi-komoditas
// komplet-komplit
// konkret-konkrit
// konkret-kongkrit
// kosa kata-kosakata
// kualitas-kwalitas
// kualitas-kwalitet
// kuantitas-kwantitas
// kuitansi-kwitansi
// kuno-kuna
// lokakarya-loka karya
// maaf-ma’af
// makhluk-mahluk
// mazhab-mahzab
// metode-metoda
// mungkir-pungkir
// narasumber-nara sumber
// nasihat-nasehat
// negatif-negatip
// November-Nopember
// objek-obyek
// objektif-obyektip
// objektif-obyektif
// olahraga-olah raga
// orang tua-orangtua
// paham-faham
// persen-prosen
// pelepasan-penglepasan
// penglihatan-pengliatan
// permukiman-pemukiman
// perumahan-prumahan
// pikir-fikir
// Prancis-Perancis
// praktik-praktek
// provinsi-propinsi
// putra-putera
// putri-puteri
// realitas-realita
// risiko-resiko
// saksama-seksama
// samudra-samudera
// saraf-syaraf
// sekretaris-sekertaris
// sekuriti-sekuritas
// segitiga-segi tiga
// selebritas-selebriti
// sepak bola-sepakbola
// silakan-silahkan
// sintesis-sintesa
// sistem-sistim
// surga-syurga
// subjek-subyek
// subjektif-subyektif
// subjektif-subyektip
// Sumatra-Sumatera
// standar-standard
// standardisasi-standarisasi
// tanda tangan-tandatangan
// tahta-takhta
// teknik-tehnik
// telepon-telpon
// telepon-telefon
// telepon-telfon
// telepon-tilpon
// teoretis-teoritis
// terampil-trampil
// utang-hutang
// wali kota-walikota
// Yogyakarta-Jogjakarta
// zaman-jaman
// Atmosfer-Atmosfir
// Apotek-Apotik
// Atlet-Atlit
// Analisis-Analisa
// Akhir-Ahir
// Aerobic-Erobik
// Baut-Baud
// Cenderamata-Cinderamata
// Dipersilakan-Dipersilahkan
// Dipindahkan-Dipindah
// Diesel-Disel
// Definisi-Difinisi
// Dolar-Dollar
// depot-depo
// daftar-daptar
// detail-detil
// definisi-difinisi
// disahkan-disyahkan
// diagnosis-diagnosa
// dipersilakan-dipersilahkan
// diferensial-differensial
// Esai-Esei
// Ekuivalen-Ekwivalen
// Ekstrem-Ekstrim
// Ekspor-Eksport
// Embus-Hembus
// Film-Filem
// Februari-Pebruari
// Foto-Photo
// Fiologi-Phiologi
// Frekuensi-Frekwensi
// Fisik-Phisik
// Hakikat-Hakekat
// Hipotesis-Hipotesa
// Hierarki-Hirarki
// Hafal-Hapal
// Imbau-Himbau
// Ijazah-Ijasah
// Insaf-Insyaf
// Izin-Ijin
// Ilmuwan-Ilmiawan
// Ikhlas-Ihlas
// Impor-Import
// Isap-Hisap
// Istri-Isteri
// Jadwal-Jadual
// Jenderal-Jendral
// Jenazah-Jenasah
// Konsepsional-Konsepsionil
// Khotbah-Khutbah
// Karier-Karir
// Kualitas-Kwalitas
// Konferesi-konperensi
// Konduite-Kondite
// Kuantitas-Kwantitas
// Kaidah-Kaedah
// Konkret-Konkrit
// Koordinasi-Koordinir
// Kompleks-Komplek
// Kuitansi-Kwitansi
// Lubang-Lobang
// Mengubah-Mengobah
// Memproklamasikan-Memproklamirkan
// Manajer-Manager
// Menerapkan-Menterapkan
// Manajemen-Managemen
// Mencolok-Menyolok
// Mendefinisikan-Mendifinisikan
// Menerjemahkan-Menterjemahkan
// Mengkritik-Mengeritik
// Menyukseskan-Mensukseskan
// Mengelola-Melola
// Mengesampingkan-Mengenyampingkan
// Metode-Metoda
// Motif-Motip
// Motivasi-Motifasi
// Mesti-Musti
// Nasihat-Nasehat
// November-Nopember
// Narasumber-nara sumber
// Risiko-Resiko
// Atmosfer-Atmosfir
// Apotek-Apotik
// Atlet-Atlit
// Aktif-Aktip
// Asas-Azas
// Aktivitas-Aktifitas
// Analisis-Analisa
// Akhir-Ahir
// Aerobic-Erobik
// Baut-Baud
// Cenderamata-Cinderamata
// Dipersilakan-Dipersilahkan
// Dipindahkan-Dipindah
// Diesel-Disel
// Definisi-Difinisi
// Dolar-Dollar
// depot-depo
// daftar-daptar
// detail-detil
// disahkan-disyahkan
// diagnosis-diagnosa
// dipersilakan-dipersilahkan
// diferensial-differensial
// Esai-Esei
// Ekuivalen-Ekwivalen
// Ekstrem-Ekstrim
// Ekspor-Eksport
// Embus-Hembus
// Film-Filem
// Februari-Pebruari
// Foto-Photo
// Fiologi-Phiologi
// Frekuensi-Frekwensi
// Fisik-Phisik
// Hakikat-Hakekat
// Hipotesis-Hipotesa
// Hierarki-Hirarki
// Hafal-Hapal
// Imbau-Himbau
// Ijazah-Ijasah
// Insaf-Insyaf
// Izin-Ijin
// Ilmuwan-Ilmiawan
// Ikhlas-Ihlas
// Impor-Import
// Isap-Hisap
// Istri-Isteri
// Jadwal-Jadual
// Jenderal-Jendral
// Jenazah-Jenasah
// Konsepsional-Konsepsionil
// Khotbah-Khutbah
// Karier-Karir
// Kualitas-Kwalitas
// Konferesi-konperensi
// Konduite-Kondite
// Kuantitas-Kwantitas
// Kaidah-Kaedah
// Konkret-Konkrit
// Koordinasi-Koordinir
// Kompleks-Komplek
// Kuitansi-Kwitansi
// Lubang-Lobang
// Memproklamasikan-Memproklamirkan
// Manajer-Manager
// Menerapkan-Menterapkan
// Manajemen-Managemen
// Mencolok-Menyolok
// Mendefinisikan-Mendifinisikan
// Menerjemahkan-Menterjemahkan
// Mengkritik-Mengeritik
// Menyukseskan-Mensukseskan
// Mengelola-Melola
// Mengesampingkan-Mengenyampingkan
// Metode-Metoda
// Motif-Motip
// Motivasi-Motifasi
// Mesti-Musti
// Nasihat-Nasehat
// November-Nopember
// Narasumber-nara sumber
// Objek-obyek
// Ons-On
// Objektif-obyektif
// Peletakan-Perletakan
// Problematic-Problimatik
// Penasihat-Penasehat
// Psikotes-Psikotest
// Produktivitas-Produktifitas
// Persentase-Prosentase
// Risiko-Resiko
// Roboh-Rubuh
// Rezeki-Rejeki
// Saksama-Seksama
// Selagi-Mumpung
// Sintesis-Sintesa
// Sistem-Sistim
// Spiritual-Spiritual
// Spesies-Spesis
// Standardisasi-Standarisasi
// Stasiun-Setasiun
// Survei-Survai
// Syukur-Sukur
// Sutera-Sutra
// Sekretaris-Sekertaris
// Silakan-Silahkan
// Sistematis-Sistimatis
// Subjektif-Subyektip
// Subjek-Subyek
// Tafsiran-Tapsiran
// Tim-Team
// Telentang-Terlentang
// Telantar-Terlantar
// Teknik-Tehnik
// Tarif-Tarip
// Telanjur-Terlanjur
// Telepon-Tilpun
// Tradisional-Tradisionil
// Terampil-Trampil
// Teoretis-Teoritis
// Ubah-Rubah
// Trotoar-Trotoir
// Utang-Hutang
// Varietas-Varitas
// Wasalam-Wasallam
// Wujud-Ujud
// Zona-Zone
// Zaman-Jaman
// Saksama-Seksama
// Selagi-Mumpung
// Sintesis-Sintesa
// Sistem-Sistim
// Spiritual-Spiritual
// Spesies-Spesis
// Standardisasi-Standarisasi
// Stasiun-Setasiun
// Survei-Survai
// Syukur-Sukur
// Sutera-Sutra
// Sekretaris-Sekertaris
// Silakan-Silahkan
// Sistematis-Sistimatis
// Subjektif-Subyektip
// Subjek-Subyek
// Tafsiran-Tapsiran
// Tim-Team
// Telentang-Terlentang
// Telantar-Terlantar
// Teknik-Tehnik
// Tarif-Tarip
// Telanjur-Terlanjur
// Telepon-Tilpun
// Tradisional-Tradisionil
// Terampil-Trampil
// Teoretis-Teoritis
// Trotoar-Trotoir
// Utang-Hutang
// Varietas-Varitas
// Wasalam-Wasallam
// Wujud-Ujud
// Zona-Zone
// Zaman-Jaman
// Objek-obyek
// Ons-On
// Objektif-obyektif
// Peletakan-Perletakan
// Problematic-Problimatik
// Penasihat-Penasehat
// Psikotes-Psikotest
// Produktivitas-Produktifitas
// Persentase-Prosentase
// Roboh-Rubuh
// Rezeki-Rejeki";
//
//
// $kata = explode(PHP_EOL, $cek);
//
// foreach ($kata as $k) {
//   $kt = explode("-", $k);
//
//   $result = mysqli_query($link, "SELECT * FROM kata WHERE pattern='".strtolower($kt[1])."' AND koreksi='".strtolower($kt[0])."'");
//   $rowcount=mysqli_num_rows($result);
//   if ($rowcount<1) {
//     echo "kon ";
//     mysqli_query($link, "INSERT INTO kata(pattern,koreksi) VALUES('".strtolower($kt[1])."','".strtolower($kt[0])."')");
//   }
//
// }
// ?>