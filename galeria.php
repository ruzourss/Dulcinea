<?php
include 'head.php';
include 'js/code_jquery.php';

$directory = "img/galeria/";
$img = scandir ( $directory );
$longitud = count ( $img );

echo "<div class='popup-gallery'>";

for($i = 2; $i < $longitud; $i ++) {
	echo "<a href=/img/galeria/" . $img [$i] . "><img src=/img/galeria/" . $img [$i] . "></a></img>";
}

echo "</div>";

include 'footer.php';
?>