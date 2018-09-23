<?php
// setcookie("cookie[1]", "cookiethree");
// setcookie("cookie[2]", "cookietwo");
// setcookie("cookie[3]", "cookieone");

if (isset($_POST["kata"])) {
  $kata = $_POST['kata'];

  setcookie("kamus[$kata]", $kata, time() + (86400 * 30));

  // after the page reloads, print them out
  loadKamus();
} else if($_GET["act"] == "load"){
  loadKamus();
} else if($_GET["act"] == "remove"){
  // menghapus cookie
  $kata = $_GET["kata"];
  unset($_COOKIE["kamus[$kata]"]);
  setcookie("kamus[$kata]", '', time() - 3600);
}



function loadKamus(){
  if (isset($_COOKIE['kamus'])) {
    echo "<ul>";
    foreach ($_COOKIE['kamus'] as $name) {

        $name = htmlspecialchars($name);
        // echo "$name : $value <br />\n";
        echo "<li>$name | <a style='color:blue;cursor:pointer;' onclick='removeKamus(\"$name\")'>Hapus</a></li>";
    }
    echo "</ul>";
  } else{
    echo "<i>Belum ada kamus</i>";
  }
}
?>
