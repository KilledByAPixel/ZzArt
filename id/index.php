<?php
$id = $_SERVER["QUERY_STRING"];
$par = file_get_contents("../data/$id");
if ($par) {
   $encoded = urlencode($par);
   Header("Location: /index.php?&shader=$encoded&fromID");
} else {
   Header("Location: /index.php?error");
}
?>
