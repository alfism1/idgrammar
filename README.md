
# idgrammar
Indonesian grammar checker
## Prasyarat Sistem
#### Sistem Operasi:
- Sistem operasi berbasis UNIX.
(Jika sistem yang digunakan di Windows, bisa menggunakan Virtual Machine yang terinstal Sistem Operasi berbasis UNIX).

#### Komponen yang harus diinstall/disiapkan:
- Foma: sudo apt-get install foma-bin
- Perl: sudo apt-get install perl
- Java (Versi 1.6 ke atas)
- Python (Versi 2.7): sudo apt install python2.7 python-pip
- PHP (Versi 7)
- PHP Curl: sudo apt-get install php7.0-curl
- [Morphind](http://septinalarasati.com/morphind/#download) (Gunakan versi yang sudah menyediakan parameter 'disambiguate')
- [POS Tagger](https://github.com/andryluthfi/indonesian-postag) (POS Tag for Bahasa Indonesia [http://bahasa.cs.ui.ac.id/postag](http://bahasa.cs.ui.ac.id/postag))

## Instalasi
- Clone repository ini ke web server yang digunakan.
- Download [Morphind](http://septinalarasati.com/morphind/#download), lalu letakan folder **morphind** ke folder **idgrammar**.
- Clone repository [POS Tagger](https://github.com/andryluthfi/indonesian-postag). Masukkan semua file di folder hasil clone POS Tagger ke dalam folder **idgrammar/tagger/**.
- Ubah *permission* folder **idgrammar** dengan perintah:
```sh
sudo chmod -R 777 idgrammar
```

### Struktur Folder

Struktur folder idgrammar:

```
idgrammar/
|-- css
|-- img
|-- js
`-- morphind
    |-- MorphInd.pl
    |-- bin-files
    |   |-- morphind.bin
    |   `-- ...
    `-- cache-files
        |-- 2432.tmp
        `-- ...        
|-- tagger 
|	|-- binary
|	|-- outputs
|   |-- NER.pl
|   |-- onetag.php
|   |-- tag.php
|   `-- ...
```
## Menjalankan Program
Url: http://ip_address/idgrammar/

## Kontributor
- Alfi Samudro Mulyo
- Pramana Yoga Saputra
- Cahya Rahmad
- Imam Fahrur Rozi
- Faisal Rahutomo
