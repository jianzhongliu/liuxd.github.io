<?php

$path = __DIR__ . '/../ppt/deck.js/ppt/';

$files = glob($path . '*.html');

foreach ($files as $file) {
    $pathinfo = pathinfo($file);
    $url = 'http://liuxd.github.io/ppt/deck.js/ppt/'.$pathinfo['filename'].'.html';
    echo '<h4><a href="' , $url , '" target="_blank">PHP培训之', $pathinfo['filename'] , '</a></h4>', PHP_EOL;
}
