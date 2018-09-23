<?php
$start = microtime(true);
error_reporting(0);
include "grammarchecker.php";
?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- Icon -->
  <link rel="icon" href="img/indo.png">

  <title>Bahasa Indonesia Grammar Checker</title>
</head>
<body>
  <div class="container">
    <br>
    <center><h2>Bahasa Indonesia Grammar Checker</h2></center><br>
    <div class="row">
      <div class="col-md-6">
        Masukan text berbahasa Indonesia:
        <form action="" method="POST">
          <div class="form-group">
            <textarea class="form-control indotext" id="indotext" name="indotext" rows="5"><?= $_POST["indotext"] ?></textarea>
          </div>
          <button type="submit" class="btn btn-primary pull-right">Submit</button>
        </form>

      </div>
      <div class="col-md-6">
        Hasil pengecekan:
        <div class="result indotext" contenteditable="false">
          <div class="idgrammar">
            <?php
            $idgrammar = idgrammar($_POST["indotext"]);

            echo $idgrammar["fulltext"];
            ?>
          </div>

        </div>

        <div class="ket-wrapper">
          <div class="row">
            <div class="col-md-8">
              <div class="ket-waktu">
                <?php
                $end = microtime(true);
                $creationtime = ($end - $start);
                printf("Halaman dimuat dalam waktu <b>%.6f</b> detik.", $creationtime);
                ?>
              </div>
            </div>
            <div class="col-md-4">
              <div class="ket-jumlaherror" align="right">
                Terdeteksi <b><?= $idgrammar["totalerror"] ?></b> kesalahan.
              </div>
            </div>
          </div>
          <hr>
          <div class="ket-warna">
            <span class="warna" style="color:#ff7675;">&#x25A0;</span>&nbsp;<span>Kesalahan grammar</span>&nbsp;&nbsp;
            <span class="warna" style="color:#74b9ff;">&#x25A0;</span>&nbsp;<span>Kalimat tidak efektif</span>&nbsp;&nbsp;
            <span class="warna" style="color:#cd84f1;">&#x25A0;</span>&nbsp;<span>Salah tanda baca</span>&nbsp;&nbsp;
            <span class="warna" style="color:#55efc4;">&#x25A0;</span>&nbsp;<span>Salah penulisan</span>&nbsp;&nbsp;
            <span class="warna" style="color:#fff200;">&#x25A0;</span>&nbsp;<span>Typo</span>&nbsp;&nbsp;
          </div>
        </div>
          <!-- <br>
          Kamus anda:
          <div id="kamus"></div> -->
      </div>
    </div>

    <?php
    echo "<pre>";
    print_r( $idgrammar["kalimat"] );
    print_r( $idgrammar["tag"] );
    echo "</pre>";
    ?>

  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>
</html>
