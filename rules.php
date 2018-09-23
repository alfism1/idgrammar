<?php

// kata : ~wd(KATA1|KATA2)wd~~t[A-z,]+g~
// tag : ~wd[A-z ]+wd~~t[A-z,]+(TAG)[A-z,]+g~
// status : - error1 -> kesalahan grammar
//          - error2 -> kalimat tidak efektif
//          - error3 -> salah tanda baca
//          - error4 -> salah penulisan
//          - error5 -> typo
// koreksi : %s0 -> token

$ruleTataBahasa = [

 1 [
    // "pattern" => '/~wd[A-z ]+wd~~t[A-z,]+(PRP)[A-z,]+g~ ~wd[A-z ]+wd~~t[A-z,]+(NN)[A-z,]+g~/i',
    "pattern" => '/(~wd[A-z ]+wd~~t[A-z,]+(VB)[A-z,]+g~) (~wd[A-z ]+wd~~t[A-z,]+(PRP)[A-z,]+g~) (~wd[A-z ]+wd~~t[A-z,]+(NN)[A-z,]+g~)/i',
    "pesan" => 'Struktur <b>Kata kerja+Saya/mereka/dia+kata benda</b> tidak sesuai',
    "koreksi" => "$1 $5 $3",
    "contoh" => "memakan apel saya",
    "status" => "error1",
    "sumber" => "",
    "pengecualian" => [
      '/~wd(memberi)wd~~t[A-z,]+g~ ~wd[A-z ]+wd~~t[A-z,]+(PRP)[A-z,]+g~ ~wd[A-z ]+wd~~t[A-z,]+(NN)[A-z,]+g~/i',
    ],
  ],

 2 [
    "pattern" => '/~wd((?:di)\w+)wd~~t[A-z,]+g~/i',
    "pesan" => '<b>di</b> harus pisah dengan kata <b>benda/tempat</b>.',
    "koreksi" => "",
    "contoh" => "di kantor",
    "status" => "error1",
    "sumber" => "http://www.pidipedia.com/kesalahan-penggunaan-bahasa-indonesia-yang-ternyata-sering-dilakukan.html",
    "pengecualian" => [
      '/dia|dirimu|dirinya|dinding/i',
    ],
    "kode" => "RTB001",  // rule tata bahasa 001
  ],

 3 [
    "pattern" => '/~wd((ke)\w+)wd~~t[A-z,]+g~/i',
    "pesan" => '<b>ke</b> harus pisah dengan kata yang mengikutinya.',
    "koreksi" => "",
    "contoh" => "ke sana",
    "status" => "error1",
    "sumber" => "PUEBI Edisi 4 Hal. 24",
    "pengecualian" => [
      '/kehadiran|keramaian|kepemimpinan|Keheningan|Ketabahan|Kekuatan/i',
    ],
    "kode" => "RTB005",  // rule tata bahasa 005
  ],

 4 [
    "pattern" => '/(~wd(di)wd~~t[A-z,]+g~) (~wd[A-z ]+wd~~t[A-z,]+(VB)[A-z,]+g~)/i',
    "pesan" => '<b>di</b> harus digabung dengan kata kerja.',
    "koreksi" => "$1$3",
    "contoh" => "dimakan",
    "status" => "error1",
    "sumber" => "http://www.pidipedia.com/kesalahan-penggunaan-bahasa-indonesia-yang-ternyata-sering-dilakukan.html",
    "pengecualian" => [],
  ],

 5 [
    "pattern" => '/(~wd(sangat|agak)wd~~t[A-z,]+g~) (~wd[A-z ]+wd~~t[A-z,]+(VB)[A-z,]+g~)/i',
    "pesan" => 'Kata sangat atau agak tidak bisa digabung dengan kata kerja.',
    // "koreksi" => "%s1",
    "koreksi" => "$3",
    "contoh" => "<s>Sangat</s> makan",
    "status" => "error1",
    "sumber" => "Buku TBBBI hal.91",
    "pengecualian" => [
      '/~wd(sangat|agak)wd~~t[A-z,]+g~ ~wd(membahayakan|berbahaya|berbisa|kecewa|mengecewakan|suka|menyukai|berharap|mengharapkan|membenci|berjasa)wd~~t[A-z,]+g~/i',
    ],
  ],

 6 [
    "pattern" => '/(~wd[A-z ]+wd~~t[A-z,]+(JJ)[A-z,]+g~) (~wd[A-z ]+wd~~t[A-z,]+(NN)[A-z,]+g~)/i',
    "pesan" => 'Kata sifat ditempatkan setelah kata benda.',
    "koreksi" => "$3 $1",
    "contoh" => "Mobil merah",
    "status" => "error1",
    "sumber" => "http://www.jakarta100bars.com/2017/04/basic-indonesian-grammar-rules.html",
    "pengecualian" => [
      '/(~wd[A-z ]+wd~~t[A-z,]+(JJ)[A-z,]+g~) ~wd(besok|hari|kemarin|pagi|saat)wd~~t[A-z,]+g~/i',
      '/~wd(sekali)wd~~t[A-z,]+g~ ~wd[A-z ]+wd~~t[A-z,]+(NN)[A-z,]+g~/i',
    ],
  ],

7  [
    // "pattern" => '/^(~wd[A-z ]+wd~~t[A-z,]+(PRP)[A-z,]+g~ ~wd[A-z ]+wd~~t[A-z,]+(NN)[A-z,]+g~)|(?<=~wd.wd~~tgZtg~ )~wd[A-z ]+wd~~t[A-z,]+(PRP)[A-z,]+g~ ~wd[A-z ]+wd~~t[A-z,]+(NN)[A-z,]+g~/i',
    "pattern" => '/^((~wd[A-z ]+wd~~t[A-z,]+(PRP)[A-z,]+g~) (~wd[A-z ]+wd~~t[A-z,]+(NN)[A-z,]+g~))|. (~wd[A-z ]+wd~~t[A-z,]+(PRP)[A-z,]+g~) (~wd[A-z ]+wd~~t[A-z,]+(NN)[A-z,]+g~)/i',
    "pesan" => 'Struktur <b>Saya/mereka/dia</b> diikuti <b>kata benda</b> tidak sesuai',
    "koreksi" => "$4 $2",
    "contoh" => "Meja saya",
    "status" => "error1",
    "sumber" => "",
    "pengecualian" => [],
  ],

 8 [
    "pattern" => '/^((~wd[A-z ]+wd~~t[A-z,]+(PRP|NN)[A-z,]+g~) (~wd[A-z ]+wd~~t[A-z,]+(VB)[A-z,]+g~) (~wd(sedang)wd~~t[A-z,]+g~))/i',
    "pesan" => 'Struktur yang benar adalah <b>Subjek+sedang+kata kerja</b>',
    "koreksi" => "$2 $6 $4",
    "contoh" => "Ibu sedang memasak",
    "status" => "error1",
    "sumber" => "",
    "pengecualian" => [],
  ],

 9 [
    "pattern" => '/(~wd[A-z ]+wd~~t[A-z,]+(VB)[A-z,]+g~) (~wd[A-z ]+wd~~t[A-z,]+(NEG)[A-z,]+g~)/i',
    "pesan" => 'Struktur yang benar adalah <b>kata negasi+kata kerja</b>',
    "koreksi" => "$1 $3",
    "contoh" => "Tidak makan",
    "status" => "error1",
    "sumber" => "",
    "pengecualian" => [],
  ],

 10 [
    "pattern" => '/(~wd[A-z ]+wd~~t[A-z,]+(VB)[A-z,]+g~) (~wd(sekali)wd~~t[A-z,]+g~)/i',
    "pesan" => 'Kata kerja tidak bisa digabung dengan kata sekali.',
    "koreksi" => "$1",
    "contoh" => "Makan <s>sekali</s>",
    "status" => "error1",
    "sumber" => "Buku TBBBI hal.91",
    "pengecualian" => [
      '/~wd(membahayakan|berbahaya|berbisa|kecewa|mengecewakan|suka|menyukai|berharap|mengharapkan|membenci|berjasa)wd~~t[A-z,]+g~ ~wd(sekali)wd~~t[A-z,]+g~/i',
    ],
  ],

 11 [
    "pattern" => '/(~wd(sangat|agak)wd~~t[A-z,]+g~) (~wd[A-z ]+wd~~t[A-z,]+(JJ)[A-z,]+g~) (~wd(sekali)wd~~t[A-z,]+g~)/i',
    "pesan" => 'Struktur kata <b>sangat+kata sifat+sekali</b> tidak efektif.',
    "koreksi" => "$1 $3",
    "contoh" => "sangat dingin <s>sekali</s>",
    "status" => "error2",
    "sumber" => "https://dosenbahasa.com/contoh-kalimat-efektif-dan-kalimat-tidak-efektif",
    "pengecualian" => [],
  ],

 12 [
    "pattern" => '/(~wd(agar)wd~~t[A-z,]+g~) (~wd(supaya)wd~~t[A-z,]+g~)/i',
    "pesan" => 'Struktur kata <b>agar+supaya</b> tidak efektif',
    "koreksi" => "$1",
    "contoh" => "Andi belajar agar lulus",
    "status" => "error2",
    "sumber" => "https://dosenbahasa.com/contoh-kalimat-efektif-dan-kalimat-tidak-efektif",
    "pengecualian" => [],
  ],

 13 [
    "pattern" => '/(~wd(demi)wd~~t[A-z,]+g~) (~wd(untuk)wd~~t[A-z,]+g~)/i',
    "pesan" => 'Struktur kata <b>demi+untuk</b> tidak efektif',
    "koreksi" => "$1",
    "contoh" => "dia bekerja demi <s>untuk</s> kebutuhan hidup",
    "status" => "error2",
    "sumber" => "https://dosenbahasa.com/contoh-kalimat-efektif-dan-kalimat-tidak-efektif",
    "pengecualian" => [],
  ],

 14 [
    "pattern" => '/(~wd(mundur)wd~~t[A-z,]+g~) (~wd(ke belakang)wd~~t[A-z,]+g~)/i',
    "pesan" => 'Struktur kata <b>mundur+ke belakang</b> tidak efektif',
    "koreksi" => "$1",
    "contoh" => "dia <s>mundur ke belakang</s>",
    "status" => "error2",
    "sumber" => "https://dosenbahasa.com/contoh-kalimat-baku-dan-tidak-baku",
    "pengecualian" => [],
  ],

 15 [
    "pattern" => '/(~wd(maju)wd~~t[A-z,]+g~) (~wd(ke depan)wd~~t[A-z,]+g~)/i',
    "pesan" => 'Struktur kata <b>maju+ke depan</b> tidak efektif',
    "koreksi" => "$1",
    // "contoh" => "dia <s>mundur ke belakang</s>",
    "status" => "error2",
    "sumber" => "https://dosenbahasa.com/contoh-kalimat-baku-dan-tidak-baku",
    "pengecualian" => [],
  ],

 16 [
    "pattern" => '/(~wd(naik)wd~~t[A-z,]+g~) (~wd(ke)wd~~t[A-z,]+g~) (~wd(atas)wd~~t[A-z,]+g~)/i',
    "pesan" => 'Struktur kata <b>naik+ke atas</b> tidak efektif',
    "koreksi" => "$1",
    // "contoh" => "dia <s>mundur ke belakang</s>",
    "status" => "error2",
    "sumber" => "https://dosenbahasa.com/contoh-kalimat-baku-dan-tidak-baku",
    "pengecualian" => [],
  ],

 17 [
    "pattern" => '/(~wd(banyak)wd~~t[A-z,]+g~) (~wd(terdapat)wd~~t[A-z,]+g~) (~wd(berbagai)wd~~t[A-z,]+g~)/i',
    "pesan" => 'Struktur kata <b>banyak+terdapat+berbagai</b> tidak efektif',
    "koreksi" => "$3 $5",
    "contoh" => "<s>banyak</s> terdapat berbagai jenis tanaman",
    "status" => "error2",
    "sumber" => "https://dosenbahasa.com/contoh-kalimat-efektif-dan-kalimat-tidak-efektif",
    "pengecualian" => [],
  ],

 18 [
    "pattern" => '/(~wd(para)wd~~t[A-z,]+g~) (~wd[A-z ]+wd~~t[A-z,]+(NN|X)[A-z,]+g~) (~wd(semua)wd~~t[A-z,]+g~)/i',
    "pesan" => 'Struktur kata <b>para+kata benda+semua</b> tidak efektif',
    "koreksi" => "$3 $5",
    // "contoh" => "<s>banyak</s> terdapat berbagai jenis tanaman",
    "status" => "error2",
    "sumber" => "https://brainly.co.id/tugas/13306924",
    "pengecualian" => [],
  ],

 19 [
    "pattern" => '/~wd[A-z ]+wd~~t[A-z,]+(X)[A-z,]+g~/i',
    "pesan" => 'Kata tidak ditemukan',
    "koreksi" => "",
    "contoh" => "",
    "status" => "error5",
    "sumber" => "",
    "pengecualian" => [],
    "kode" => "RTB002",  // rule tata bahasa 002
  ],

 20 [
    "pattern" => '/~wd[A-z ]+wd~~t[A-z,]+(VB)[A-z,]+g~ ~wd(lah)wd~~t[A-z,]+g~/i',
    "pesan" => '<b>Kata kerja</b> digabung dengan partikel <b>lah</b>.',
    "koreksi" => "autocorrect",
    "contoh" => "Makanlah",
    "status" => "error4",
    "sumber" => "PUEBI Edisi 4",
    "pengecualian" => [],
    "kode" => "RTB003",  // rule tata bahasa 003
  ],

 21 [
    "pattern" => '/~wd([A-z]+pun)wd~~t[A-z,]+g~/i',
    "pesan" => 'Partikel <b>pun</b> harus dipisah dengan kata sebelumnya.',
    "koreksi" => "autocorrect",
    "contoh" => "Makananpun",
    "status" => "error4",
    "sumber" => "PUEBI Edisi 4",
    "pengecualian" => [
      '/meskipun|adapun|bagaimanapun|walaupun/i',
    ],
    "kode" => "RTB004",  // rule tata bahasa 004
  ],

  // rule kalimat tanya
 22 [
    "pattern" => '/(~wd[A-z]+wd~~t[A-z,]+(?:PRP)[A-z,]+g~ ~wd[A-z]+wd~~t[A-z,]+(?:VB)[A-z,]+g~ ~wd[A-z]+wd~~t[A-z,]+(?:WH)[A-z,]+g~)([^\?])$/i',
    "pesan" => 'Kalimat tanya diakhiri dengan tanda tanya <b>?</b>',
    "koreksi" => "$1?",
    "contoh" => "Kamu makan apa?",
    "status" => "error3",
    "sumber" => "",
    "pengecualian" => [],
  ],

 23 [
    "pattern" => '/^(~wd(?:Apa|Siapa|Bagaimana|Kapan|Di mana|Berapa|Mengapa|Kenapa)wd~~t[A-z,]+g~(.*))([^\?])$/i',
    "pesan" => 'Kalimat tanya diakhiri dengan tanda tanya <b>?</b>',
    "koreksi" => "$1?",
    "contoh" => "Kamu makan apa?",
    "status" => "error3",
    "sumber" => "",
    "pengecualian" => [],
  ],
  // rule kalimat tanya

 24 [
    "pattern" => '/~wd[a-z]+wd~~t[A-z,]+(NNP)[A-z,]+g~/',
    "pesan" => 'Gunakan huruf besar diawal kata',
    "koreksi" => function ($m) {
      return ucfirst($m);
    },
    // "contoh" => "<s>banyak</s> terdapat berbagai jenis tanaman",
    "status" => "error4",
    "sumber" => "",
    "pengecualian" => [],
  ],

];


$ruleTataTulis = [
  [
    "pattern" => '/([A-z]+,\s){1,}([A-z]+\s)dan(\s[A-z]+)/i',
    "pesan" => 'Gunakan tanda koma sebelum kata \'dan\'',
    "pola_salah" => '/\sdan/',
    "koreksi" => ", dan",
    "contoh" => "Kucing, singa, macan, dan jaguar",
    "status" => "error3",
    "sumber" => "http://www.pidipedia.com/kesalahan-penggunaan-bahasa-indonesia-yang-ternyata-sering-dilakukan.html",
    "pengecualian" => [],
  ],

  [
    "pattern" => '/Rp( |\. ?)(?=\d+)/i',
    "pesan" => 'Nilai mata uang disambung dengan nominal',
    "pola_salah" => '/Rp( |\. ?)/',
    "koreksi" => "Rp",
    "contoh" => "Rp5000",
    "status" => "error4",
    "sumber" => "http://www.pidipedia.com/kesalahan-penggunaan-bahasa-indonesia-yang-ternyata-sering-dilakukan.html",
    "pengecualian" => [],
  ],

  [
    "pattern" => '/jam(?= \d+)/i',
    "pesan" => 'Gunakan pukul, bukan jam untuk menunjukkan waktu',
    "pola_salah" => '/jam/',
    "koreksi" => "pukul",
    "contoh" => "pukul 5",
    "status" => "error4",
    "sumber" => "http://www.pidipedia.com/kesalahan-penggunaan-bahasa-indonesia-yang-ternyata-sering-dilakukan.html",
    "pengecualian" => [],
  ],

  [
    "pattern" => '/(?<=pukul )(\d{2}:\d{2})/i',
    "pesan" => 'Gunakan tanda (.) sebagai pembatas antara jam dan menit',
    "pola_salah" => '/:/',
    "koreksi" => ".",
    "contoh" => "05.00",
    "status" => "error4",
    "sumber" => "http://www.pidipedia.com/kesalahan-penggunaan-bahasa-indonesia-yang-ternyata-sering-dilakukan.html",
    "pengecualian" => [],
  ],

  [
    "pattern" => '/^[a-z]\w+|(?<=\. )[a-z]\w+/',
    "pesan" => 'Awal kalimat harus menggunakan huruf besar',
    "pola_salah" => '/^[a-z]|(?<=\. )[a-z]/',
    "koreksi" => function ($m) {return strtoupper($m[0]);},
    "contoh" => "<b>A</b>pel",
    "status" => "error4",
    "sumber" => "https://puebi.readthedocs.io/en/latest/huruf/huruf-kapital/",
    "pengecualian" => [],
  ],

  [
    "pattern" => '/[^\>|^\.|^\?|^\!]$/',
    "pesan" => 'Akhir kalimat harus menggunakan tanda titik (.)',
      "pola_salah" => '/[A-z0-9]$/',
      "koreksi" => "",
      "contoh" => "apel.",
      "status" => "error3",
      "sumber" => "https://puebi.readthedocs.io/en/latest/tanda-baca/tanda-titik/",
    "pengecualian" => [],
    "kode" => "RTT001",  // rule tata tulis 001
  ],

  [
    "pattern" => '/(?<=\w)\s(?=".+")/',
    "pesan" => 'Gunakan tanda baca koma (,) sebelum menggunakan petik',
    "pola_salah" => '/(?<=\w)\s(?=".+")/',
    "koreksi" => "",
    "contoh" => "",
    "status" => "error3",
    "sumber" => "https://puebi.readthedocs.io/en/latest/tanda-baca/tanda-koma/",
    "pengecualian" => [],
    "kode" => "RTT002", // rule tata tulis 002
  ],

  [
    "pattern" => '/(?<=[^\=][^\']")[a-z](?=.+")/',
    "pesan" => 'Setelah penggunaan petik harus menggunakan huruf besar',
    "pola_salah" => '/(?<=")[a-z](?=.+")/',
    "koreksi" => function ($m) {return strtoupper($m[0]);},
    "contoh" => "",
    "status" => "error4",
    "sumber" => "https://puebi.readthedocs.io/en/latest/huruf/huruf-kapital/",
    "pengecualian" => [],
    "kode" => "RTT003", // rule tata tulis 003
  ],


]

?>
