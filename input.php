<?php
ob_start();
error_reporting(0);
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
	  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

    <!-- Icon -->
    <link rel="icon" href="img/indo.png">

    <title>Input Kata - Bahasa Indonesia Grammar Checker</title>
  </head>
  <body>

    <div class="container">

      <br>
      <center><h2>Masukkan kata baku dan tidak baku</h2></center><br>

      <form class="" action="" method="post">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="katabaku">Kata baku</label>
          <input type="text" class="form-control" id="katabaku" name="koreksi" placeholder="Kata baku" />
        </div>
        <div class="form-group col-md-6">
          <label for="katatidakbaku">Kata tidak baku</label>
          <input type="text" class="form-control" id="katatidakbaku" name="pattern" placeholder="Kata tidak baku" />
        </div>
      </div>
      <input type="submit" class="btn btn-primary">
      </form>

      <br>
      <table id="daftarKata" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>No.</th>
            <th>Kata baku</th>
            <th>Kata tidak baku</th>
            <th>Hapus</th>
          </tr>
        </thead>
        <tbody>
      <?php
      // tampilkan data
      $no = 1;
      $result = mysqli_query($link, "SELECT * FROM kata ORDER BY id DESC");
      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){?>
        <tr>
          <td><?= $no ?></td>
          <td><?= $row["koreksi"] ?></td>
          <td><?= $row["pattern"] ?></td>
          <td><a href="<?php echo "input.php?act=hapus&id=$row[id]";  ?>">Hapus</a></td>
        </tr>
      <?php
      $no++;
      }
      ?>
        </tbody>
      </table>

    </div>

    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
    $(document).ready( function () {
      $('#daftarKata').DataTable();
    } );
    </script>
  </body>
</html>



<?php

if (($_POST["pattern"] && $_POST["koreksi"])) {
  $result = mysqli_query($link, "SELECT * FROM kata WHERE pattern='".strtolower($_POST["pattern"])."' AND koreksi='".strtolower($_POST["koreksi"])."'");
  $rowcount=mysqli_num_rows($result);

  if ($rowcount<1 && $_POST["pattern"]!=$_POST["koreksi"]) {
    mysqli_query($link, "INSERT INTO kata(pattern,koreksi) VALUES('".strtolower($_POST['pattern'])."','".strtolower($_POST['koreksi'])."')");
    header("location: input.php");
  } else{
    header("location: input.php?status=0");
  }
}
if ($_GET["act"]=="hapus" && isset($_GET["id"])) {
  mysqli_query($link, "DELETE FROM kata WHERE id='$_GET[id]'");
  header("location: input.php");
}



mysqli_close($link);
?>
