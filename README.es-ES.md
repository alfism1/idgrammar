

# idgrammar
Corrector de gramática indonesa
## Requisitos del sistema
#### Sistema Operativo:
- Sistema operativo basado en UNIX.
(Si el sistema utilizado es Windows, puede utilizar una Máquina Virtual con un sistema operativo basado en UNIX instalado).

#### Componentes que deben instalarse/prepararse:
- Foma: sudo apt-get install foma-bin
- Perl: sudo apt-get install perl
- Java (Versión 1.6 en adelante)
- Python (Versión 2.7): sudo apt install python2.7 python-pip
- PHP (Versión 7)
- PHP Curl: sudo apt-get install php7.0-curl
- [Morphind](http://septinalarasati.com/morphind/#download) (Utilice la versión que ya incluya el parámetro 'disambiguate')
- [POS Tagger](https://github.com/andryluthfi/indonesian-postag) (POS Tag para indonesio [http://bahasa.cs.ui.ac.id/postag](http://bahasa.cs.ui.ac.id/postag))

## Instalación
- Clone este repositorio en el servidor web utilizado.
- Descargue [Morphind](http://septinalarasati.com/morphind/#download) y coloque la carpeta **morphind** dentro de la carpeta **idgrammar**.
- Clone el repositorio [POS Tagger](https://github.com/andryluthfi/indonesian-postag). Mueva todos los archivos de la carpeta resultante del clon de POS Tagger a la carpeta **idgrammar/tagger/**.
- Cambie los *permisos* de la carpeta **idgrammar** con el comando:
```sh
sudo chmod -R 777 idgrammar
```

### Estructura de carpetas

Estructura de carpetas de idgrammar:

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
## Ejecutar el programa
URL: http://ip_address/idgrammar/

## Contribuidores
- Alfi Samudro Mulyo
- Pramana Yoga Saputra
- Cahya Rahmad
- Imam Fahrur Rozi
- Faisal Rahutomo
