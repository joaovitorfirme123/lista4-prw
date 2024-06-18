
  <?php

      echo "<strong>nome:</strong> " . $_POST["texto"] . "<br>";
      echo "<strong>Caixa de texto de rolagem (TextArea):</strong> " . $_POST["area_texto"] . "<br>";

      if (isset($_POST["checkbox1"])) {
          echo "<strong>carro -". $_POST["checkbox1"].":</strong> Selecionado<br>";
      } else {
          echo "<strong>carro - ". $_POST["checkbox1"].":</strong> Não selecionado<br>";
      }

      if (isset($_POST["checkbox2"])) {
          echo "<strong>moto - ". $_POST["checkbox2"].":</strong> Selecionado<br>";
      } else {
          echo "<strong>moto - ". $_POST["checkbox2"].":</strong> Não selecionado<br>";
      }

      echo "<strong>sexo:</strong> " . $_POST["radio"] . "<br>";
      echo "<strong>combustivel:</strong> " . $_POST["menu_select"] . "<br>";
  
  ?>
  

