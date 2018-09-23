<?php
header('Content-Type: application/json');

if ($_POST["text"]=="") {
  echo json_encode(["result"=>"unknown method"]);
} else{
  /* start of : proses tagging seluruh text */
  $file = 'outputs/res-[001]-input.txt';
  $text = $_POST["text"];
  file_put_contents($file, $text);
  $tag = shell_exec('perl NER.pl -f=[001];cat ./outputs/res-[001]-resolved.txt');
  $result = ( explode(PHP_EOL, $tag) );
  // hasil tagging untuk semua text yang dimasukan (array)
  // format setiap elemen : (kata\tTAG)
  /* end of : proses tagging seluruh text */


  /* start of : memecah array $result ke bagian lebih detail */
  $words = array();
  $tags = "";
  $fulltag = "";
  for ($i=0; $i < count($result); $i++) {

    $word = explode("\t",$result[$i]);
    if ($word[0] != "" && $word[1] != "") { // karena terkadang ada yang kosong
      if (($word[0]=="."||$word[0]=="?"||$word[0]=="!") && $word[1]=="Z") {
        $fulltag .= $word[0]." ";
      }
      else{
        $words[$i] = array("kata"=>$word[0], "tag"=>$word[1]);
        $tags .= trim($word[1])."+";
        $fulltag .= "~wd".trim($word[0])."wd~~tg".trim($word[1])."tg~ ";
      }

    }

  }
  // http://php.net/manual/en/function.preg-replace.php
  // menghilangkan karakter spasi pada karakter "(spasi).?!"
  $fulltag = preg_replace('/\s+(\.)/','.',$fulltag);
  $fulltag = preg_replace('/\s+(\?)/','?',$fulltag);
  $fulltag = preg_replace('/\s+(\!)/','!',$fulltag);
  $tags = rtrim($tags,"+");
  /* end of : memecah array $result ke bagian lebih detail */



  /* start of : hasil akhir */
  $tagresult = ["text" => $text,"result" => $words, "tag" => $tags, "fulltag" => trim($fulltag)];
  echo json_encode($tagresult);
  /* end of : hasil akhir */
}
?>
