<?php
echo "GOT:<br>";
$json = file_get_contents("php://input");
$dataArray = json_decode($json, true);

echo $json;

?>

<img src="<?= $dataArray['image'] ?>">