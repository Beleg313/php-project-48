
<?php

function parseFile(string $filePath): array
{
    if (!file_exists($filePath)) {
        throw new \Exception("File not found: $filePath");
    }

    $fileContent = file_get_contents($filePath);
    if ($fileContent === false) {
        throw new \Exception("Unable to read file: $filePath");
    }

    $data = json_decode($fileContent, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new \Exception("Error parsing JSON from file: $filePath");
    }

    return $data;
}
