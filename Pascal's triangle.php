<?php
    $line = array(array("1"), array("1", "1"));
    for($i = 2; $i < 10; $i++){
      $number = array();
      array_push($line, $number);
      for($j = 0; $j <= $i; $j++){
        if($j == 0 or $j == $i){
          array_push($line[$i], 1);
        }
        else{
          $insert = $line[$i-1][$j-1] + $line[$i-1][$j];
          array_push($line[$i], $insert);
        }
      }
    }
    echo '<table width="300px">';
    foreach ($line as $value) {
      echo "<tr><td align='center'>";
      foreach ($value as $out) {
        echo $out." ";
      }
      echo "</td></tr>";
    }
?>
