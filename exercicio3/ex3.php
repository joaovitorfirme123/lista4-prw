<?php
  
  $capitais = array(
    "AC" => "Rio Branco",
    "AL" => "Maceió",
    "AP" => "Macapá",
    "AM" => "Manaus",
    "BA" => "Salvador",
    "CE" => "Fortaleza",
    "DF" => "Brasília",
    "ES" => "Vitória",
    "GO" => "Goiânia",
    "MA" => "São Luís",
    "MT" => "Cuiabá",
    "MS" => "Campo Grande",
    "MG" => "Belo Horizonte",
    "PA" => "Belém",
    "PB" => "João Pessoa",
    "PR" => "Curitiba",
    "PE" => "Recife",
    "PI" => "Teresina",
    "RJ" => "Rio de Janeiro",
    "RN" => "Natal",
    "RS" => "Porto Alegre",
    "RO" => "Porto Velho",
    "RR" => "Boa Vista",
    "SC" => "Florianópolis",
    "SP" => "São Paulo",
    "SE" => "Aracaju",
    "TO" => "Palmas"
  );

 
      $estado = $_POST["estado"];

      if (array_key_exists($estado, $capitais)) {
          echo "<p>A capital de " . $estado . " é <strong>" . $capitais[$estado] . "</strong>.</p>";
      }

  ?>
  

