php
<?php
$asean = array(
    "Indonesia" => "D.K.I. Jakarta",
    "Singapura" => "Singapura",
    "Malaysia" => "Kuala Lumpur",
    "Brunei" => "Bandar Seri Begawan",
    "Thailand" => "Bangkok",
    "Laos" => "Vientiane",
    "Filipina" => "Manila",
    "Myanmar" => "Naypyidaw"
);

echo "Daftar Negara ASEAN dan Ibukotanya :<br>";
foreach ($asean as $negara => $ibukota) {
    echo "- $negara : $ibukota<br>";
}


?>