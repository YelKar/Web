CREATE TABLE
    post(
        id INT AUTO_INCREMENT,
        title VARCHAR(255) NOT NULL,
        subtitle VARCHAR(255) NOT NULL,
        content text NOT NULL,
        author VARCHAR(255) NOT NULL,
        author_avatar_url VARCHAR(255) NOT NULL,
        publish_date VARCHAR(255) NOT NULL DEFAULT NOW(),
        preview_url VARCHAR(255) NOT NULL,
        image_url VARCHAR(255) NOT NULL,
        featured TINYINT(1) DEFAULT 0,
        type VARCHAR(31) DEFAULT '',
        PRIMARY KEY (`id`)
    );