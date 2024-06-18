
  <?php
   
      $ano = $_POST["ano"];
      function ehBissexto($ano) {
          return (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0));
      }
 
      if (ehBissexto($ano)) {
          echo "<p>O ano " . $ano . " é bissexto.</p>";
      } else {
          echo "<p>O ano " . $ano . " não é bissexto.</p>";
      }
  ?>

