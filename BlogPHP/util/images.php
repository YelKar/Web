<?php

function saveFile(string $file, string $data): void {
    echo "<br>$file<br>";
    $myFile = fopen($file, 'x');
    if ($myFile) {
        $result = fwrite($myFile, $data);
        if ($result) {
            echo 'Данные успешно сохранены в файл';
        } else {
            echo 'Произошла ошибка при сохранении данных в файл';
        }
        fclose($myFile);
    } else {
        var_dump($myFile);
        echo 'Произошла ошибка при открытии файла';
    }
}

function saveImage(string $name, string $imageBase64): void {
    $imageBase64Array = explode(';base64,', $imageBase64);
    $imgExtension = str_replace('data:image/', '', $imageBase64Array[0]);
    $imageDecoded = base64_decode($imageBase64Array[1]);
    saveFile($res_name = "{$name}.{$imgExtension}", $imageDecoded);
}