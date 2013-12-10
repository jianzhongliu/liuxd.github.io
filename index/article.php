<?php

$path = __DIR__ . '/../article/html/';

$files = glob($path . '*.html');

foreach ($files as $file) {
    $pathinfo = pathinfo($file);
    $url = 'http://liuxd.github.io/article/html/'.$pathinfo['filename'];
    echo '<h4><a href"' , $url , '">', $pathinfo['filename'] , '</a></h4>', PHP_EOL;
}
