php
<?php
$negara_asean = array("Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand");

echo "Daftar Negara ASEAN awal :";
echo "<ul>";
foreach ($negara_asean as $negara) {
    echo "<li>$negara</li>";
}
echo "</ul>";

array_push($negara_asean, "Laos", "Filipina", "Myanmar");

echo "Daftar Negara ASEAN baru :";
echo "<ul>";
foreach ($negara_asean as $negara) {
    echo "<li>$negara</li>";
}
echo "</ul>";
?>