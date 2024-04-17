<?php

require_once __DIR__ . "/exceptions.php";

function saveFile(string $file, string $data): bool {
    $myFile = fopen($file, 'w');
    if ($myFile) {
        $result = fwrite($myFile, $data);
        fclose($myFile);
        if ($result) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

/**
 * @throws SaveImageException
 */
function saveImage(string $path, string $name, string $imageBase64): string {
    $imageBase64Array = explode(';base64,', $imageBase64);
    $imgExtension = str_replace('data:image/', '', $imageBase64Array[0]);
    $imageDecoded = base64_decode($imageBase64Array[1]);
    $fileName = "{$name}.{$imgExtension}";
    if (saveFile($path . $fileName, $imageDecoded)) {
        return $fileName;
    } else {
        throw new SaveImageException;
    }
}