<?php
function getConnectionParams(): ?array
{
    $conf = parse_ini_file("blog_conf.ini", true);
    return $conf["databaseConnectionParams"];
}

function connectDatabase(): PDO
{
    $params = getConnectionParams();
    return new PDO(
        $params["dsn"],
        $params["username"],
        $params["password"],
    );
}

function getPostContent(PDO $connection, int $id): ?array {
    $query = <<<SQL
        SELECT 
            title, subtitle, 
            content, image_url 
        FROM
            post
        WHERE id=$id;
    SQL;

    $statement = $connection->query($query);
    if ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        return $row;
    }
    return null;
}

function getPostsPreviews(PDO $connection, bool $featured): ?array {
    $query = <<<SQL
        SELECT 
            id, 
            title, subtitle, 
            preview_url,
            author, author_avatar_url, 
            publish_date, 
            type 
        FROM 
            post 
        WHERE 
            featured = :featured;
    SQL;

    $statement = $connection->prepare($query);
    $statement -> execute([":featured" => (int) $featured]);

    if ($rows = $statement->fetchAll(PDO::FETCH_ASSOC)) {
        return $rows;
    }
    return null;
}


function savePost(PDO $connection, array $post): ?int {
    $query = <<<SQL
        INSERT INTO 
            post (
                title,
                subtitle,
                content,
                author,
                author_avatar_url,
                image_url,
                featured,
                type,
                preview_url
            )
        VALUES (
            :title,
            :subtitle,
            :content,
            :author,
            :author_avatar_url,
            :image_url,
            :featured,
            :type,
            :preview_url
        )
    SQL;
    $statement = $connection -> prepare($query);
    $statement -> execute([
        ":title" => $post["title"],
        ":subtitle" => $post["subtitle"],
        ":content" => $post["content"],
        ":author" => $post["author"],
        ":author_avatar_url" => $post["author_avatar_url"],
        ":image_url" => $post["image_url"],
        ":featured" => $post["featured"] ?? null,
        ":type" => $post["type"] ?? null,
        ":preview_url" => $post["preview_url"],
    ]);
    return $connection -> lastInsertId();
}
