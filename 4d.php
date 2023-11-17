<?php
$negara = array(
    array("Negara" => "Indonesia", "Ibukota" => "D.K.I. Jakarta", "Kode Telepon" => "+62"),
    array("Negara" => "Singapura", "Ibukota" => "Singapura", "Kode Telepon" => "+65"),
    array("Negara" => "Malaysia", "Ibukota" => "Kuala Lumpur", "Kode Telepon" => "+60"),
    array("Negara" => "Brunei", "Ibukota" => "Bandar Seri Begawan", "Kode Telepon" => "+673"),
    array("Negara" => "Thailand", "Ibukota" => "Bangkok", "Kode Telepon" => "+66"),
    array("Negara" => "Laos", "Ibukota" => "Vientiane", "Kode Telepon" => "+856"),
    array("Negara" => "Filipina", "Ibukota" => "Manila", "Kode Telepon" => "+63"),
    array("Negara" => "Myanmar", "Ibukota" => "Naypyidaw", "Kode Telepon" => "+95")
);

// Fungsi untuk mengurutkan array berdasarkan kolom "Negara"
function sortArray($array, $sortKey)
{
    $sortColumn = array_column($array, $sortKey);
    array_multisort($sortColumn, SORT_ASC, $array);
    return $array;
}

$negara = sortArray($negara, "Negara");

echo "<table border='1'>";
echo "<tr><th>Negara</th><th>Ibukota</th><th>Kode Telepon</th></tr>";

foreach ($negara as $data) {
    echo "<tr>";
    echo "<td>" . $data['Negara'] . "</td>";
    echo "<td>" . $data['Ibukota'] . "</td>";
    echo "<td>" . $data['Kode Telepon'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>