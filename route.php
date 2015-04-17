<?php
include_once(__DIR__ . "/Parsedown.php");

$uri = strtolower(rtrim($_SERVER["REQUEST_URI"]));
$request = explode('/', $uri);
array_shift($request);
$first = removeGet($request[0]);
$base = "/docs/";

if($first == '') {
    showFile("home.md");
} else {
    showFile($first . ".md");
}

function showFile($path) {
    global $base;
    if(file_exists(__DIR__ . $base . $path) && is_readable(__DIR__ . $base . $path)) {
        $Parsedown = new Parsedown();
        $split = explode(".", $path);
        echo str_replace("{{page_title}}", ucwords(str_replace("_", " ", $split[0])), str_replace("{{page_content}}", $Parsedown->text(file_get_contents(__DIR__ . $base . $path)), file_get_contents(__DIR__ . "/template.html")));
    } else {
        header("HTTP/1.0 404 Not Found");
        header("Content-type: text/plain");
        echo "Input file not found: " . $path . ".md";
        // TODO: a proper 404 page
    }
    die();
}

function removeGet($url) {
    return preg_replace('/\\?.*/', '', $url);
}