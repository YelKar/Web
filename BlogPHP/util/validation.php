<?php

function validatePostJson(array $json): bool {
    return validateField($json, "title", true, 1, 255)
        && validateField($json, "subtitle", true, 1, 255)
        && validateField($json, "content", true)
        && validateField($json, "author", true, 1, 255)
        && validateField($json, "type", false, 0, 31)
        && (function () use ($json): bool {
            var_dump($json["featured"]);
            if (
                isset($json["featured"])
                && !(
                    is_numeric($json["featured"]) ||
                    is_bool($json["featured"])
                )
            ) {
                echo "featured must be boolean or numeric (0/1)";
                return false;
            }
            return true;
        })();
}

function validateField(array $json, string $field, bool $notNull = false, ?int $minLen = 1, ?int $maxLen = null): bool {
    if (isset($json[$field])) {
        if (strlen($json[$field]) < $minLen) {
            echo "$field is too short. title length must be from $minLen to $maxLen";
            return !$notNull;
        } else if ($maxLen !== null && strlen($json[$field]) > $maxLen) {
            echo "$field is too long. title length must be from $minLen to $maxLen";
            return false;
        }
    } else if ($notNull) {
        echo "$field is not set<br>";
        return false;
    }
    return true;
}
