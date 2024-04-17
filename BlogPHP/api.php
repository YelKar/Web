<?php
require_once __DIR__ . "/util/images.php";
require_once __DIR__ . "/database.php";


$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {
    $json = file_get_contents("php://input");
    $dataArray = json_decode($json, true);
    var_dump($dataArray);
} else {
    echo "Method $method is not allowed";
    die();
}

function fromTitleToFileName(string $name): string
{
    return strtolower(
        preg_replace(
            '#[:/\\\\"\'`!?,]#', "_",
        str_replace(
            " ", "-", $name)
        ));
}

$imageFileName = fromTitleToFileName($dataArray["title"]);

try {
    $pageImageName = saveImage(__DIR__ . "/static/images/page-images/", $imageFileName, $dataArray["image"]);
} catch (SaveImageException) {
    echo "Error during saving page image";
    die();
}
try {
    $pagePreviewName = saveImage(__DIR__ . "/static/images/page-previews/", $imageFileName, $dataArray["preview"]);
} catch (SaveImageException) {
    echo "Error during saving page preview";
    die();
}
try {
    $authorImageName = saveImage(__DIR__ . "/static/images/author-avatars/", fromTitleToFileName($dataArray["author"]), $dataArray["author_avatar_image"]);
} catch (SaveImageException) {
    echo "Error during saving author avatar";
    die();
}

$rowArray = [
    "title" => $dataArray["title"],
    "subtitle" => $dataArray["subtitle"],
    "content" => $dataArray["content"],
    "author" => $dataArray["author"],
    "author_avatar_url" => $authorImageName,
    "publish_date" => $dataArray["publish_date"],
    "image_url" => $pageImageName,
    "featured" => $dataArray["featured"] ?? 0,
    "type" => $dataArray["type"],
    "preview_url" => $pagePreviewName,
];

$conn = connectDatabase();
savePost($conn, $rowArray);

var_dump($rowArray);

